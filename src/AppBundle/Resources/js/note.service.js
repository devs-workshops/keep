(function(){
	angular.module('app')
		.factory('NoteService', function($http)
		{
			return {
				getNotes: getNotes,
				saveNote: saveNote,
				deleteNote: deleteNote,
				createBlankNote: createBlankNote
			};

			function getNotes()
			{
				return $http.get('/note')
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

			function saveNote(note)
			{
				if (note.id)
				{
					return $http.put('/note/' + note.id, note)
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
					return $http.post('/note', note)
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

			function deleteNote(note)
			{
				return $http.delete('/note/' + note.id);
			}

			function createBlankNote()
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
})()

