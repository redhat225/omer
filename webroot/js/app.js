angular.module('omer',['omer.controllers','omer.services','ui.router','angular-loading-bar','chart.js'])
	.run(['$rootScope','$templateCache','$transitions', function($rootScope, $templateCache,$transitions){
		$transitions.onStart({to:'admins.**'},function(trans){
			$rootScope.preloader = true;
			$rootScope.call_pageloader = 'is-active';
		});	
		$transitions.onSuccess({to:'admins.**'},function(trans){
			$rootScope.preloader = false;
			$rootScope.call_pageloader = '';
			$templateCache.removeAll();
		});	

	}])
	.config(['$httpProvider','$stateProvider','$urlRouterProvider','$locationProvider', function($httpProvider, $stateProvider, $urlRouterProvider, $locationProvider){
		$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
		$httpProvider.defaults.headers.common['Authorization'] = 'bearer '+localStorage.getItem('token');

		// Activate Html5 Mode + hashPrefix
		$locationProvider.html5Mode(true);
		$locationProvider.hashPrefix('!');
		// Routing 
		$stateProvider.state('admins',{
			url:'/',
			templateUrl: '/admins',
			controller: 'AdminsController as adminscontroller',
			abstract:true,
		}).state('admins.dashboard',{
			url:'dashboard',
			templateUrl:'/views/dashboard',
			controller: 'DashController as dashctrl'
		})
		$urlRouterProvider.otherwise('/dashboard');
	}])