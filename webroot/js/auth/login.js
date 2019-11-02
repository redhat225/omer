angular.module('login',[])
	.controller('MainCtrl', ['$scope', function($scope){
		var self = this;
	}])
	.config(['$httpProvider', function($httpProvider){
		$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
	}])
	.controller('LoginController', ['$scope','LoginService', function($scope,LoginService){
		var self = this;
		self.isSubmitting = 'none';
		self.credentials = {
			remember_me: false
		};

		$scope.login_switch = 'phase1';

		$scope.login_switch_trigger = function(id){
			switch(id){
				case 1:
					$scope.login_switch = 'phase1';
				break;

				case 2:
					$scope.login_switch = 'phase2';
				break;
			}
		}


		self.login = function(credentials){
			self.is_authenticating = true;
			self.isSubmitting = 'is-loading';
			LoginService.authenticate(credentials).then(function(response){
				if(response.data.jwt_generated)
				{
                   toastr.success('Authentification réussi');
				   localStorage.token = response.data.jwt_generated;
				   document.location.href="/admins/dashboard";
				}
			}, function(error){
                  toastr.error('Authentification échouée, veuillez réessayer');
			}).finally(function(){
				self.is_authenticating = false;
				self.isSubmitting = 'none';
			});
		};
		self.forgotpassword = function(){
				document.location.href="/admins/forgot";
		};
	}])
	.factory('LoginService', ['$http','$q', function($http,$q){
		return{
			authenticate: function(credentials){
				return $http.post('/admins/login', credentials).then(function(response){
					return response;
				}, function(error){
					return $q.reject(error);
				})	
			}
		}
	}])