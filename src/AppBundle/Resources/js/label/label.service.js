(function(){
	angular.module('app')
		.factory('LabelService', function($http)
		{
			return {
				getLabels: getLabels,
				saveLabel: saveLabel,
				deleteLabel: deleteLabel,
				createBlankLabel: createBlankLabel
			};

			function getLabels()
			{
				return $http.get('/label')
					.then(function(response)
					{
						return response.data;
					})
					.catch(function(error)
					{
						alert(getErrorMessage(error));
					})
				;
			}

			function saveLabel(label)
			{
				if (label.id)
				{
					return $http.put('/label/' + label.id, label)
						.then(function(response)
						{
							return response.data;
						})
						.catch(function(error)
						{
							alert(getErrorMessage(error));
						})
					;
				}
				else
				{
					return $http.post('/label', label)
						.then(function(response)
						{
							return response.data;
						})
						.catch(function(error)
						{
							alert(getErrorMessage(error));
						})
					;
				}
			}

			function deleteLabel(label)
			{
				return $http.delete('/label/' + Label.id);
			}

			function createBlankLabel()
			{
				return {
					title: "",
					content: ""
				};
			}

			function getErrorMessage(error)
			{
				return 'Error ' + error.status  + ': ' + error.statusText;
			}
		})
	;
})();

