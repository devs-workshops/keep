(function(){
	angular.module('app', ['templates']);
})();

(function(){
	angular.module('app')
		.controller('IndexController', function($scope, NoteService)
		{
			$scope.notes = NoteService.getNotes();
		})
	;
})();


(function(){
	angular.module('app')
		.directive('navigation', function()
		{
			return {
				templateUrl: "navigation.html"
			};
		})
	;
})();

(function(){
	angular.module('app')
		.directive('newNote', function()
		{
			return {
				templateUrl: "new-note.html",
				scope: {
					notes: "="
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
					if ($scope.blankNote && ($scope.blankNote.title.length > 0 || $scope.blankNote.text.length > 0))
					{
						NoteService.saveNote($scope.blankNote);
					}

					$scope.blankNote = null;
				}
			}
		})
	;
})();

(function(){
	angular.module('app')
		.directive('note', function()
		{
			return {
				templateUrl: "note.html"
			};
		})
	;
})();

(function(){
	angular.module('app')
		.factory('NoteService', function()
		{
			var notes = [
				{title: 'Note 1', text: 'Note 1 text'},
				{title: 'Note 2', text: 'Note 2 text'},
				{title: 'Note 3', text: 'Note 3 text'},
				{title: 'Note 4', text: 'Note 4 text'},
				{title: 'Note 5', text: 'Note 5 text'},
				{title: 'Note 6', text: 'Note 6 text'},
				{title: 'Note 7', text: 'Note 7 text'}
			];

			return {
				getNotes: getNotes,
				saveNote: saveNote,
				createBlankNote: createBlankNote
			};

			function getNotes()
			{
				return notes;
			}

			function saveNote(note)
			{
				notes.unshift(note);
			}

			function createBlankNote()
			{
				return {
					title: "",
					text: ""
				};
			}
		})
	;
})()

