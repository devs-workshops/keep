(function(){
	angular.module('label')
		.directive('labelEditable', function()
		{
			return {
				scope: true,
				bindToController: {
					label: '='
				},
				templateUrl: "label/label-editable.html",
				controller: LabelEditableController,
				controllerAs: 'LabelEditableCtrl'
			};

			function LabelEditableController()
			{
				var vm = this;
			}
		})
	;
})();
