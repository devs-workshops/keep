(function(){
	angular.module('app')
		.directive('newNote', function()
		{
			return {
				templateUrl: "new-note.html",
				scope: {
					notes: '='
				},
				controller: NewNoteController
			};

			function NewNoteController($scope, NoteService)
			{
				$scope.blankNote = null;

				$scope.createNote = createNote;
				$scope.saveNote = saveNote;

				function createNote()
				{
					$scope.blankNote = NoteService.createBlankNote();
				}

				function saveNote()
				{
					if ($scope.blankNote && ($scope.blankNote.title.length > 0 || $scope.blankNote.content.length > 0))
					{
						NoteService.saveNote($scope.blankNote).then(function(savedNote)
						{
							$scope.notes.unshift(savedNote);
						});
					}

					$scope.blankNote = null;
				}
			}
		})
	;
})();
