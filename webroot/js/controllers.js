angular.module('omer.controllers',[])
	.controller('AdminsController',['$scope', function($scope){

	}])
	.controller('DashController',['$scope','KpiService', function($scope,KpiService){
			var self = this;

			$scope.collector ={};

			$scope.top_base_services_ca = [];
			$scope.top_base_services_trans = [];
			$scope.all_service_transactions = [];
			$scope.top_zones = [];
			$scope.quickParc = [];
			$scope.quickTraffic = [];
			$scope.quickReload = [];
			$scope.quickCa = [];

					$scope.options_pie_2 = {
						        legend: {
					            display: true,
					            position: 'left',

					        }
					};
			// Camembert top zones


			$scope.refreshStats = function(collector){
				KpiService.top_base_service(collector).then(function(resp){
					$scope.top_base_services_ca = resp.data.stats.by_ca;
					$scope.top_base_services_trans = resp.data.stats.by_nbre_trans;
				}, function(err){
					console.log(err);
				});

				KpiService.all_service_transactions(collector).then(function(resp){
					$scope.all_service_transactions = resp.data.stats;
				}, function(err){
					console.log(err);
				});

				KpiService.topZone(collector).then(function(resp){
					$scope.top_zones = resp.data.stats;
					$scope.labels_pie = [];
					$scope.data_pie = [];
					$scope.top_zones.by_ca.forEach(function(element, index){
						$scope.data_pie.push(element.ca);
						$scope.labels_pie.push(element.name);
					});

					$scope.labels_pie_2 = [];
					$scope.data_pie_2 = [];
					$scope.top_zones.by_nbre_trans.forEach(function(element, index){
						$scope.data_pie_2.push(element.ca);
						$scope.labels_pie_2.push(element.name);
					});


				}, function(err){
					console.log(err);
				});

				KpiService.quickParc(collector).then(function(resp){
					$scope.quickParc = resp.data.payload;
				}, function(err){
					console.log(err);
				});

				KpiService.quickTraffic(collector).then(function(resp){
					$scope.quickTraffic = resp.data.payload;
				}, function(err){
					console.log(err);
				});


				KpiService.quickReload(collector).then(function(resp){
					$scope.quickReload = resp.data.payload;
				}, function(err){
					console.log(err);
				});


				KpiService.quickCa(collector).then(function(resp){
					$scope.quickCa = resp.data.payload;
				}, function(err){
					console.log(err);
				});	
			}

			$scope.get_row_bg = function(index){
				if((index % 2) == 0)
					return 'mcen-skyblack-b';
				else
					return 'mcen-skyblue-b';
			}


  			$scope.labels_radar =["SQLi", "DirTrav", "Xss", "Default Password", "Dns Poisoning", "Cookie Stealing", "Verbose System"];

			  $scope.data_radar = [
			    [65, 59, 90, 81, 56, 55, 40],
			    [28, 48, 40, 19, 96, 27, 100]
			  ];
			$scope.colors = ["#ec008c","#110e39","#caebd5","#fff70c","#626984","#3D0100","#8A0C09","#023D15","#573A0E","#97305B","#1FBDAC"];
			 //graph
			 $scope.labels = ["January", "February", "March", "April", "May", "June", "July",];
			  $scope.series = ['Series A', 'Series B'];
			  $scope.data = [
			    [65, 59, 80, 81, 56, 55, 40],
			    [28, 48, 40, 19, 86, 27, 90]
			  ];
			  $scope.onClick = function (points, evt) {
			  };
			  $scope.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];
			  $scope.options = {
			    scales: {
			      yAxes: [
			        {
			          id: 'y-axis-1',
			          type: 'linear',
			          display: true,
			          position: 'left'
			        },
			        {
			          id: 'y-axis-2',
			          type: 'linear',
			          display: true,
			          position: 'right'
			        }
			      ]
			    }
			   };



			  //doughnout
			  $scope.labels_doughnout = [];
			  $scope.data_doughnout = [];	

	}])