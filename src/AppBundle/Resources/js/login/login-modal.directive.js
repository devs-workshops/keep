(function(){
	angular.module('login')
		.directive('loginModal', loginModalDirective);

	loginModalDirective.$inject = ['$timeout'];
			
	function loginModalDirective($timeout, NoteService)
	{
		return {
			templateUrl: "login/login-modal.html",
			link: linkFunc
		};

		function linkFunc($scope, $element)
		{
			$scope.closeModal = function()
			{
				$element.find('.modal').closeModal();
			};

			$timeout(function()
			{
				$('body').append($element);
				$element.find('.modal').openModal();
			});
		}
	}
})();


