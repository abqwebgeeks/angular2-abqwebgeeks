import {RouterModule, Routes} from "@angular/router";
import {IntroductionComponent} from "./components/introduction-component";
import {NewInTwoComponent} from "./components/new-in-two-component";
import {OneVsTwoComponent} from "./components/one-vs-two-component";
import {FuzzyComponent} from "./components/fuzzy-component";
import {WatComponent} from "./components/wat-component";
import {SplashComponent} from "./components/splash-component";


export const allAppComponents = [IntroductionComponent, NewInTwoComponent, OneVsTwoComponent, FuzzyComponent, WatComponent, SplashComponent];

export const routes: Routes = [
	{path: "introduction", component: IntroductionComponent},
	{path: "new-in-two", component: NewInTwoComponent},
	{path: "one-vs-two", component: OneVsTwoComponent},
	{path: "fuzzy", component: FuzzyComponent},
	{path: "wat", component: WatComponent},
	{path: "", component: SplashComponent}
];

export const appRoutingProviders: any[] = [];

export const routing = RouterModule.forRoot(routes);
