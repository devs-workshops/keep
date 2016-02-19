(function(){
	angular.module('login')
		.directive('loginPassword', loginPasswordDirective);

	function loginPasswordDirective()
	{
		var WEAK_PASSWORD_REGEXP = /^[a-z]+$/
		return {
			require: 'ngModel',
			link: linkFunc
		};

		function linkFunc($scope, $element, $attr, $ctrl)
		{
			$ctrl.$validators.weak = function(modelValue, viewValue)
			{
				if ($ctrl.$isEmpty(modelValue)) return true;

				return !WEAK_PASSWORD_REGEXP.test(viewValue);
			}
		}
	}
})();



