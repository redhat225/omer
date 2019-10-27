angular.module('eben.services',[])
	.factory('KpiService',['$http','$q', function($http,$q){
		return{
			global:(interval_object)=>{
				return $http.post('/stats/global',interval_object).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			}
		}
	}]).factory('Registers',['$http','$q', function($http, $q){
		return{
			retrieve:()=>{
				return $http.get('/registers/retrieve').then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});
			},
			retrieve_countries_and_cities:()=>{
				return $http.get('/registers/retrieve-countries-and-cities').then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});	
			},
			resource:(resource_label)=>{
				return $http.get('/registers/resource/'+resource_label).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});	
			}
		}
	}]).factory('Projects',['$http','$q', function($http,$q){
		return{
			create:(project)=>{
				return $http.post('/projects/add',project).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			},
			retrieve:()=>{
				return $http.get('/projects/all').then(response=>{
					return response;
				},error=>{
					return $q.reject(error);
				})
			},
			load:(project_id)=>{
				return $http.post('/projects/load',{project_id:project_id}).then(response=>{
					return response;
				}, error=>{
					return $q.reject(error);
				})
			},
			edit:(project)=>{
				return $http.post('/projects/edit',project).then(response=>{
					return response;
				}, error=>{
					return $q.reject(error);
				})
			},
			close:(project_id)=>{
				return $http.post('/projects/close',{project_id:project_id}).then(response=>{
					return response;
				}, error=>{
					return $q.reject(error);
				});
			}
		}
	}]).factory('ProjectAccompaniments',['$http','$q', function($http,$q){
		return{
			create:(accompaniment)=>{
				return $http.post('/project_accompaniments/add',accompaniment).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			},
			update:(accompaniment)=>{
				return $http.post('/project_accompaniments/update',accompaniment).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			},
			retrieve:(project_id)=>{
				return $http.get('/project_accompaniments/all',{params:{'id':project_id}}).then(response=>{
					return response;
				},error=>{
					return $q.reject(error);
				})
			}
		}
	}]).factory('ProjectPlannings',['$http','$q', function($http,$q){
		return{
			update:(planning)=>{
				return $http.post('/project_plannings/update',planning).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			}
		}
	}]).factory('ProjectVulnerabilities',['$http','$q', function($http,$q){
		return{
			add:(item)=>{
				return $http.post('/project_vulnerabilities/add',item).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			}
		}
	}]).factory('userService',['$http','$q', function($http,$q){
		return{
			all:()=>{
				return $http.get('/users/all').then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			}
		}
	}]).factory('AccountService',['$http','$q', function($http,$q){
		return{
			unlock:(user_account_id)=>{
				return $http.post('/accounts/unlock',{account_id:user_account_id}).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			},
			renew_password:(user_account_id)=>{
				return $http.post('/accounts/renew',{account_id:user_account_id}).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			},
			get: function(id){
				return $http.get('/accounts/get',{params:{'id':id}}).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});
			}
		}
	}]).factory('roleAccountService',['$http','$q', function($http,$q){
		return{
			all:()=>{
				return $http.get('/role-accounts/all').then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			}
		}
	}]).factory('profileService',['$http','$q', function($http,$q){
		return{
			all:()=>{
				return $http.get('/profiles/all').then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			},
			get:()=>{
				return $http.get('/profiles/get').then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				})
			}
		}
	}])



	


