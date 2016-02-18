(function(){
	angular.module('app')
		.directive('noteEditModal', noteEditModalDirective);

	noteEditModalDirective.$inject = ['$timeout', 'NoteService'];
			
	function noteEditModalDirective($timeout, NoteService)
	{
		return {
			templateUrl: "note/edit/edit-modal.html",
			link: linkFunc
		};

		function linkFunc($scope, $element)
		{
			$scope.closeModal = function()
			{
				$element.find('.modal').closeModal();
			};

			$scope.onDeleted = function(deletedNote)
			{
				$scope.notes.splice(
					$scope.notes.indexOf(deletedNote), 1
				);

				$scope.closeModal();
			};

			$timeout(function()
			{
				$('body').append($element);
				$element.find('.modal').openModal();
			});
		}
	}
})();


