angular.module('omer.services',[])
	.factory('KpiService',['$http','$q', function($http,$q){
		return{
			top_base_service:(collector)=>{
				return $http.post('/stats/top-service-base',collector).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});
			},
			all_service_transactions:(collector)=>{
				return $http.post('/stats/all-service-transactions',collector).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});
			},
			topZone:(collector)=>{
				return $http.post('/stats/top-zone',collector).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});
			},
			quickParc:(collector)=>{
				return $http.post('/stats/quick-parc',collector).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});
			},
			quickTraffic:(collector)=>{
				return $http.post('/stats/quick-traffic',collector).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});
			},
			quickReload:(collector)=>{
				return $http.post('/stats/quick-reload',collector).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});
			},
			quickCa:(collector)=>{
				return $http.post('/stats/quick-ca',collector).then(function(resp){
					return resp;
				}, function(err){
					return $q.reject(err);
				});
			}
		}
	}])