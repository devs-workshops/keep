(function(){
	angular.module('login')
		.directive('loginOpen', loginOpenDirective);

	loginOpenDirective.$inject = ['$compile'];
		
	function loginOpenDirective($compile)
	{
		return {
			link: function($scope, $element)
			{
				$element.click(showLoginModal);

				function showLoginModal()
				{
					$compile('<login-modal></login-modal>')($scope);
				}
			}
		};
	}
})();
