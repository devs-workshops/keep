(function(){
	angular.module('app').config(config);

	function config($stateProvider, $urlRouterProvider) {
		$urlRouterProvider.otherwise("/");
		$stateProvider
			.state('index', {
				url: "/"
			})
			.state('index.filter', {
				url: "filter/:label"
			})
			.state('new', {
				url: "/new",
				template: "<note-new notes=notes></note-new>"
			})
	}
})();
