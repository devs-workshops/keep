(function(){
	angular.module('label')
		.directive('labels', function()
		{
			return {
				templateUrl: "label/labels.html",
				controller: LabelsController,
				controllerAs: "LabelsCtrl"
			};

			LabelsController.$inject = ['$scope', 'LabelService'];
			
			function LabelsController($scope, LabelService)
			{
				var vm = this;

				LabelService.getLabels().then(function(labels)
				{
					vm.labels = labels;
				});

				vm.isFreeForCreate = isFreeForCreate;

				function isFreeForCreate(labelName)
				{
					for(var key in vm.labels)
					{
						if (vm.labels[key].name === labelName)
						{
							return false;
						}
					}

					return true;
				}
			}
		})
	;
})();
