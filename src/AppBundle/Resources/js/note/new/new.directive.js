(function(){
	angular.module('app')
		.directive('noteNew', function()
		{
			return {
				templateUrl: "note/new/note-new.html",
				scope: true,
				bindToController: {
					notes: '=',
				},
				controller: NoteNewController,
				controllerAs: 'NoteNewCtrl'
			};

			NoteNewController.$inject = ['$state', 'NoteService'];

			function NoteNewController($state, NoteService)
			{
				var vm = this;

				vm.blankNote = NoteService.createBlankNote();

				vm.onSaved = onSaved;

				function onSaved(savedNote)
				{
					if (savedNote)
					{
						vm.notes.unshift(savedNote);
					}

					$state.go('index');
				}
			}
		})
	;
})();
