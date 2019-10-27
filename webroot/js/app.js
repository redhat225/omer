angular.module('eben',['eben.controllers','eben.services','ui.router','angular-loading-bar','chart.js'])
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
			resolve:{
				profile:['profileService', function(profileService){
					return profileService.get().then(function(resp){
						return resp;
					}, function(err){
						toastr.error('Une erreur est survenue');
						$state.reload();
					}) 
				}]
			}
		}).state('admins.dashboard',{
			url:'dashboard',
			templateUrl:'/views/dashboard',
			controller: 'DashController as dashctrl'
		}).state('admins.projects',{
			url:'projects',
			templateUrl:'/projects',
			abstract:true
		}).state('admins.projects.view',{
			url:'/view',
			templateUrl:'/projects/view',
			controller: 'ProjectsController as projectsctrl'
		}).state('admins.projects.add',{
			url:'/add',
			templateUrl:'/projects/add',
			controller: 'ProjectsAddController as projectsaddctrl'
		}).state('admins.projects.edit',{
			url:'/edit/:project_id',
			templateUrl:'/projects/edit',
			controller: 'ProjectsEditController as projectseditctrl'
		}).state('admins.projects.write',{
			url:'/write/:project_id',
			templateUrl:'/projects/write',
			controller: 'ProjectsWriteController as projectswritectrl'
		}).state('admins.accounts',{
			url:'accounts',
			templateUrl:'/accounts',
			abstract:true
		}).state('admins.accounts.view',{
			url:'/view',
			templateUrl:'/accounts/view',
			controller: 'AccountsController as accountsctrl'
		}).state('admins.accounts.add',{
			url:'/add',
			templateUrl:'/accounts/add',
			controller: 'AccountsAddController as accountsaddctrl'
		}).state('admins.accounts.edit',{
			url:'/edit/:user_id',
			templateUrl:'/accounts/edit',
			controller: 'AccountsEditController as accountseditctrl'
		}).state('admins.profile',{
			url: 'profiles',
			templateUrl:'/profiles',
			abstract:true
		}).state('admins.profile.edit',{
			url:'/edit',
			templateUrl:'/profiles/edit',
			controller:'ProfilesEditController as profileseditctrl'
		});



		$urlRouterProvider.otherwise('/dashboard');
	}])