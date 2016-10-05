app.controller("TodoController", ["$scope", "TodoService", function($scope, TodoService) {
	$scope.todos = [];

	$scope.getTodos = function() {
		TodoService.getTodos()
			.then(function(result) {
				if(result.data.status === 200) {
					$scope.todos = result.data.data;
				}
			});
	}

	if($scope.todos.length === 0) {
		$scope.getTodos();
	}
}]);
