class Todo {
	constructor(private todoId: number, private todoText: string) {}

	getTodoId() : number {
		return(this.todoId);
	}

	setTodoId(newTodoId: number) {
		this.todoId = newTodoId;
	}

	getTodoText() : string {
		return(this.todoText);
	}

	setTodoText(newTodoText: string) {
		this.todoText = newTodoText;
	}
}
