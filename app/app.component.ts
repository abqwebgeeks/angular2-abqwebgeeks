import {Component} from "@angular/core";

@Component({
	selector: 'abqwebgeeks-app',
	templateUrl: './templates/abqwebgeeks-app.php'
})

export class AppComponent {
	navCollapse = true;

	toggleCollapse() {
		this.navCollapse = !this.navCollapse;
	}
}
