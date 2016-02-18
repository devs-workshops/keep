(function(){
	angular.module('app')
		.directive('noteEditOpenModal', noteEditOpenDirective);

	noteEditOpenDirective.$inject = ['$compile'];
		
	function noteEditOpenDirective($compile)
	{
		return {
			link: function($scope, $element)
			{
				$element.click(showNoteEditModal);

				function showNoteEditModal()
				{
					$compile('<note-edit-modal></note-edit-modal>')($scope);
				}
			}
		};
	}
})();
