(function(){
	angular.module('app')
		.controller('IndexController', function($scope, NoteService)
		{
			NoteService.getNotes().then(function(notes)
			{
				$scope.notes = notes;
			});
		})
	;
})();

