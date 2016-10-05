import {Component, OnInit} from "@angular/core";
import {TodoService} from "../services/todo-service";

@Component({
	templateUrl: "./templates/todo.php"
})

export class TodoComponent {
	todos : Todo[] = [];

	constructor(private todoService: TodoService) {}

	ngOnInit() : void {
		this.getTodos();
	}

	getPromise() : void {
		this.todoService.getTodos()
			.subscribe(todos => this.todos = todos);
	}
}
