(function(){
	angular.module('label')
		.filter('label', filter);

		filter.$inject = ['$stateParams'];

		function filter($stateParams)
		{
			return labelFilter;

			function labelFilter(notes)
			{
				if (notes === undefined || !$stateParams.hasOwnProperty('label')) return notes;

				var filteredNotes = [];
				
				notes.forEach(function(note)
				{
					note.labels.forEach(function(label)
					{
						if (label.name === $stateParams.label)
						{
							filteredNotes.push(note);
						}
					});
				});

				return filteredNotes;
			}
		}
	;
})();

