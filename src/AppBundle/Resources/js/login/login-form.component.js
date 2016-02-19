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

	function LoginFormController()
	{
		var ctrl = this;

		ctrl.onSignIn = onSignIn;
		ctrl.onClose = onClose;

		function onSignIn()
		{
			console.log('Email', ctrl.email);	
			console.log('Password', ctrl.password);	
		}

		function onClose() {
			if (typeof ctrl.onCloseCallback === 'function')
			{
				ctrl.onCloseCallback();	
			}
		}
	}

})();

