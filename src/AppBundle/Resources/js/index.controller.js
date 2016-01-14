(function(){
	angular.module('app')
		.controller('IndexController', function($scope, NoteService)
		{
			$scope.notes = NoteService.getNotes();
		})
	;
})();

