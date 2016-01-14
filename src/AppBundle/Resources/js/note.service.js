(function(){
	angular.module('app')
		.factory('NoteService', function()
		{
			var notes = [
				{title: 'Note 1', text: 'Note 1 text'},
				{title: 'Note 2', text: 'Note 2 text'},
				{title: 'Note 3', text: 'Note 3 text'},
				{title: 'Note 4', text: 'Note 4 text'},
				{title: 'Note 5', text: 'Note 5 text'},
				{title: 'Note 6', text: 'Note 6 text'},
				{title: 'Note 7', text: 'Note 7 text'}
			];

			return {
				getNotes: getNotes,
				saveNote: saveNote,
				createBlankNote: createBlankNote
			};

			function getNotes()
			{
				return notes;
			}

			function saveNote(note)
			{
				notes.unshift(note);
			}

			function createBlankNote()
			{
				return {
					title: "",
					text: ""
				};
			}
		})
	;
})()

