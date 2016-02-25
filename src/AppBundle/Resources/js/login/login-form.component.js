(function(){
	var Component = {
		templateUrl: 'login/login-form.html',
		controller: LoginFormController,
		bindings: {
			onCloseCallback: '&onClose'
		}
	}

	angular.module('login')
		.component('loginForm', Component);

	LoginFormController.$inject = ['$http']

	function LoginFormController($http)
	{
		var ctrl = this;

		ctrl.onSignIn = onSignIn;
		ctrl.onClose = onClose;

		function onSignIn()
		{
			var payload = {
				"email": ctrl.email,
				"password": ctrl.password
			};

			sendLoginRequest(payload).then(function(response){
				console.log('login response', response.data);
				alert(response.data);
			});
		}

		function onClose() {
			if (typeof ctrl.onCloseCallback === 'function')
			{
				ctrl.onCloseCallback();	
			}
		}

		function sendLoginRequestWithJquery(payload) {
			$.post('/login-check', payload, function(response){
				console.log('jQuery', response);
				alert(response);
			});
		}

		function sendLoginRequest(payload) {
			return $http.post('/login-check', payload);
		}
	}

})();

