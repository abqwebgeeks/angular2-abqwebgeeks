import {Component, OnInit} from "@angular/core";
import {HighlightService} from "../services/highlight-service";

@Component({
	templateUrl: "./templates/one-vs-two.php"
})

export class OneVsTwoComponent {
	promise: string = "";
	observable: string = "";

	constructor(private highlightService: HighlightService) {}

	ngOnInit() : void {
		this.getPromise();
		this.getObservable();
	}

	getPromise() : void {
		this.highlightService.getHighlight("promise.js")
			.subscribe(promise => this.promise = promise);
	}

	getObservable() : void {
		this.highlightService.getHighlight("observable.ts")
			.subscribe(observable => this.observable = observable);
	}
}
