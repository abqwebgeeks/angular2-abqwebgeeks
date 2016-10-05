import {Component, OnInit} from "@angular/core";
import {HighlightService} from "../services/highlight-service";

@Component({
	templateUrl: "./templates/new-in-two.php"
})

export class NewInTwoComponent implements OnInit {
	todoJs : string = "";
	todoTs : string = "";

	constructor(private highlightService: HighlightService) {}

	ngOnInit() : void {
		this.getTodoJs();
		this.getTodoTs();
	}

	getTodoJs() : void {
		this.highlightService.getHighlight("todo.js")
			.subscribe(todoJs => this.todoJs = todoJs);
	}

	getTodoTs() : void {
		this.highlightService.getHighlight("todo.ts")
			.subscribe(todoTs => this.todoTs = todoTs);
	}
}
