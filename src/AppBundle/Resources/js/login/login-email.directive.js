(function(){
	angular.module('login')
		.directive('loginEmail', loginEmailDirective);

	function loginEmailDirective($q, $timeout)
	{
		return {
			require: 'ngModel',
			link: linkFunc
		};

		function linkFunc($scope, $element, $attr, $ctrl)
		{
			$ctrl.$asyncValidators.exist = function(modelValue, viewValue) {

				if ($ctrl.$isEmpty(modelValue)) return $q.when();

				var defer = $q.defer();

				$timeout(function()
				{
					console.log('email validator');

					if (true || Math.round(Math.random()))
					{
						defer.resolve();
					}
					else
					{
						defer.reject();
					}
				}, 100);


				return defer.promise;
			};
		}
	}
})();



