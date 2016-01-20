(function(){
	angular.module('app')
		.directive('noteEdit', function()
		{
			return {
				templateUrl: "note-edit.html",
				scope: true,
				bindToController: {
					note: '=noteEdit',
					onSaveCallback: '=onSave',
					onDeleteCallback: '=onDelete'
				},
				controller: NoteEditController,
				controllerAs: 'NoteEditCtrl'
			};

			function NoteEditController($scope, NoteService)
			{
				var vm = this;

				vm.saveNote = saveNote;
				vm.deleteNote = deleteNote;
				
				function saveNote()
				{
					if (vm.note.title.length > 0 || vm.note.content.length > 0)
					{
						NoteService.saveNote(vm.note).then(function(savedNote)
						{
							vm.note = savedNote;
							
							if (typeof vm.onSaveCallback === 'function')
							{
								vm.onSaveCallback(vm.note);	
							}
						});
					}
					else
					{
						vm.onSaveCallback(false);	
					}
				}
				
				function deleteNote()
				{
					NoteService.deleteNote(vm.note).then(function()
					{
						if (typeof vm.onDeleteCallback === 'function')
						{
							vm.onDeleteCallback(vm.note);	
						}
					});
				}
			}
		})
	;
})();
