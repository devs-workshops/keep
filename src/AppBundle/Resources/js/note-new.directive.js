(function(){
	angular.module('app')
		.directive('noteNew', function()
		{
			return {
				templateUrl: "note-new.html",
				scope: true,
				bindToController: {
					notes: '=',
				},
				controller: NoteNewController,
				controllerAs: 'NoteNewCtrl'
			};

			NoteNewController.$inject = ['$scope', 'NoteService'];

			function NoteNewController($scope, NoteService)
			{
				var vm = this;

				vm.blankNote = null;

				vm.createNote = createNote;
				vm.onSaved = onSaved;

				function createNote()
				{
					vm.blankNote = NoteService.createBlankNote();
				}

				function onSaved(savedNote)
				{
					if (savedNote)
					{
						vm.notes.unshift(savedNote);
					}

					vm.blankNote = null;
				}
			}
		})
	;
})();
