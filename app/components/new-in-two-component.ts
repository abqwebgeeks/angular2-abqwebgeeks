import {Component, OnInit} from "@angular/core";
import {HighlightService} from "../services/highlight-service";

@Component({
	templateUrl: "./templates/new-in-two.php"
})

export class NewInTwoComponent implements OnInit {
	fooJs : string = "";
	fooTs : string = "";

	constructor(private highlightService: HighlightService) {}

	ngOnInit() : void {
		this.getFooJs();
		this.getFooTs();
	}

	getFooJs() : void {
		this.highlightService.getHighlight("foo.js")
			.subscribe(fooJs => this.fooJs = fooJs);
	}

	getFooTs() : void {
		this.highlightService.getHighlight("foo.ts")
			.subscribe(fooTs => this.fooTs = fooTs);
	}
}
