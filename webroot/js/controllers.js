angular.module('eben.controllers',['ui.tinymce','ngFileUpload','chart.js'])
	.controller('AdminsController',['$scope','profile', function($scope,profile){
		  $scope.profile = profile.data.profile;
	}])
	.controller('DashController',['$scope','KpiService','Upload','profile','Registers', function($scope,KpiService,Upload,profile,Registers){
		  var self = this;
		  // radar
		  $scope.labels =["Condition 1", "Condition 2", "Condition 3", "Condition 4", "Condition 5", "Condition 6", "Condition 7", "Condition 8", "Condition 9", "Condition 10", "Condition 11", "Condition 12"];
		  $scope.colors_dashboard=["#46bfbd","#fdb45c","#949fb1","#4d5360","#97bbcd","#dcdcdc","#98f2f2"];
		  $scope.options = {
		  		title:{
		  			display:true,
		  			text:"Niveau de conformité au Standard PCIDSS v3.2.1",
		  			fontSize:20
		  		},
			    scale: {
			        // Hides the scale
			        display: true
			    },
			    legend:{
			    	display:true,
			    	position:'left'
			    }
		  };

		$scope.data_audit_labels =["Condition 1", "Condition 2", "Condition 3", "Condition 4", "Condition 5", "Condition 6", "Condition 7", "Condition 8", "Condition 9", "Condition 10", "Condition 11", "Condition 12"];
		$scope.options_audit_radar = {
		  		title:{
		  			display:true,
		  			text:"Niveau de conformité au Standard PCIDSS v3.2.1",
		  			fontSize:18
		  		}
		  };
		  $scope.data_audit_radar = [[0,0,0,0,0,0,0,0,0,0,0,0]];
          $scope.audit_radar_colors =["#d61a27","#97bbcd"];

		  // Manage quickview audit-box
		  $scope.initial_audit_report_quick_view_trigger = '';
		  $scope.initial_audit_report_quick_view_condition_id = 0;
		  $scope.show_initial_audit_report_quick_view = function(condition_id){
		   $scope.initial_audit_report_quick_view_trigger = 'is-active';
		   $scope.initial_audit_report_quick_view_condition_id = condition_id;
		  };
		  $scope.close_initial_audit_report_quick_view = function(condition_id){
		   $scope.initial_audit_report_quick_view_trigger = '';
		  };


		  $scope.profile = profile.data.profile;
		  $scope.global_kpis = {};
		  $scope.filter_keys = '';
		  $scope.is_loading = "";
		  $scope.load_kpis = function(interval_object){
		  $scope.is_loading = "is-active";
			KpiService.global(interval_object).then(response=>{
			  	 $scope.global_kpis = response.data.whole_stats;
						 $scope.global_kpis.projects.forEach(function(element){
							element.project_meta = JSON.parse(element.project_meta);
							element.project_accompaniments.forEach(function(element){
								element.accompaniments_meta = JSON.parse(element.accompaniments_meta);
							});
							element.project_deliverables.forEach(function(element){
								element.deliverable_meta = JSON.parse(element.deliverable_meta);
							});
							element.project_plannings.forEach(function(element){
								element.planning_meta = JSON.parse(element.planning_meta);
								if(element.planning_meta.t_1_date)
								  element.planning_meta.t_1_date = new Date(element.planning_meta.t_1_date);
								else
								  element.planning_meta.t_1_date = null;

								if(element.planning_meta.t1_date)
								  element.planning_meta.t1_date = new Date(element.planning_meta.t1_date);
								else
								  element.planning_meta.t1_date = null;

								if(element.planning_meta.t3_date)
								  element.planning_meta.t3_date = new Date(element.planning_meta.t3_date);
								else
								  element.planning_meta.t3_date = null;

								if(element.planning_meta.t3c_date)
								  element.planning_meta.t3c_date = new Date(element.planning_meta.t3c_date);
								else
								  element.planning_meta.t3c_date = null;
							});
							element.project_vulnerabilities.forEach(function(element){
								element.vulnerability_content = JSON.parse(element.vulnerability_content);
							});
						});
			  	 $scope.modelize_charts();
			  }, error=>{
			  	 toastr.error('Une erreur est survenue, veuillez réessayer');
			  }).finally(function(){
		  			$scope.is_loading = "";
			  });
		  };

		  $scope.modelize_charts = function(){
				  // Section 1 followed projects
				  $scope.pie_followed_chart_options = {
							title:{ 
								display:true,
								text:'Résumé',
								fontSize:16,
							},
							tooltips:{
								intersect:false
							},
							legend:{
								display:true,
								position:'left'
							}
				   };

				   // generate main radar
				   $scope.stats_report_audit_context = {
								conformity:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
								in_place:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
								not_in_place:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
								not_applicable:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
								total:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
								global_conformity:0,
								global_in_place:0,
								global_not_inplace:0,
								global_not_applicable:0,
								global_total:0
				   };

				   $scope.init_single_radar_datas = function(){
							$scope.stats_report_audit_single = {
								conformity:0,
								in_place:0,
								total:0
						   };						  
				   };

				   $scope.overrides_radar = [];
				   $scope.radar_datas = [];
				   $scope.customers = [];

				   $scope.global_kpis.projects.forEach(function(element, index){
				   	    let radar_label = {
				   	    	label:element.project_meta.project_customer.name+"-"+element.project_meta.project_customer.country
				   	    };
				   	    $scope.customers.push(element.project_meta.project_customer);
				   	    $scope.overrides_radar.push(radar_label);
				   		if(element.project_meta.hasOwnProperty("pcidssv321")){
				   		  var parent_condition = 1;
				   		  let stats_report_audit_single_array = [];
				   		  $scope.init_single_radar_datas();
				   		  let full_length_object = (element.project_meta.pcidssv321.length-1);
				   		  element.project_meta.pcidssv321.forEach(function(elm, ind){
				   		  	    // console.log(parent_condition);
				   		  	    // console.log(elm.parent_condition_id);
							  	if(elm.parent_condition_id != parent_condition){
									$scope.stats_report_audit_single.conformity = (Math.round(($scope.stats_report_audit_single.in_place/$scope.stats_report_audit_single.total)*100)).toFixed(2);
							  		stats_report_audit_single_array.push($scope.stats_report_audit_single.conformity);
							  		parent_condition = elm.parent_condition_id;
				   		  			$scope.init_single_radar_datas();
							  	}
						  		if(elm.procedure_verdict != "N/T"){
							  		$scope.stats_report_audit_context.total[parent_condition-1].ex++;
							  		$scope.stats_report_audit_single.total++;
						  		}
							  	if(elm.procedure_verdict == "N/A"){
							  		$scope.stats_report_audit_context.not_applicable[parent_condition-1].ex++;
							  	}
							  	if(elm.procedure_verdict == "Oui"){
							  		$scope.stats_report_audit_context.in_place[parent_condition-1].ex++;
							  		$scope.stats_report_audit_single.in_place++;
							  	}
							  	if(elm.procedure_verdict == "Non"){
							  		$scope.stats_report_audit_context.not_in_place[parent_condition-1].ex++;
							  	}
							  	if(full_length_object == ind){
									$scope.stats_report_audit_single.conformity = (Math.round(($scope.stats_report_audit_single.in_place/$scope.stats_report_audit_single.total)*100)).toFixed(2);
							  		stats_report_audit_single_array.push($scope.stats_report_audit_single.conformity);
							  	}
				   		   });
				   		  $scope.radar_datas.push(stats_report_audit_single_array);
				   }else{
				   		  let mock = [0,0,0,0,0,0,0,0,0,0,0,0];
				   		  $scope.radar_datas.push(mock);
				   }
			   });
			   
			   for(i=0;i<12;i++){
		   					$scope.stats_report_audit_context.conformity[i].ex = (Math.round(($scope.stats_report_audit_context.in_place[i].ex/$scope.stats_report_audit_context.total[i].ex)*100)).toFixed(2);
				}

			  var global_conformity = 0,global_in_place=0,global_not_inplace=0,global_not_applicable=0,global_total = 0;
			  for(i=0;i<12;i++){
			  	global_conformity +=  parseFloat($scope.stats_report_audit_context.conformity[i].ex);
			  	global_in_place += $scope.stats_report_audit_context.in_place[i].ex;
			  	global_not_inplace += $scope.stats_report_audit_context.not_in_place[i].ex;
			  	global_not_applicable += $scope.stats_report_audit_context.not_applicable[i].ex;
			  	global_total += $scope.stats_report_audit_context.total[i].ex;
			  }
			  $scope.stats_report_audit_context.global_conformity = (Math.round(global_conformity/12)).toFixed(2);
			  $scope.stats_report_audit_context.global_in_place = global_in_place;
			  $scope.stats_report_audit_context.global_not_inplace = global_not_inplace;
			  $scope.stats_report_audit_context.global_not_applicable = global_not_applicable;
			  $scope.stats_report_audit_context.global_total = global_total;

			   $scope.detail_followed_project_labels=["Etude","Execution","Production","Tests","Fin des tests","Non démarré","Suspendu","Annulé","Clotûré"];
			   $scope.detail_followed_projects=[];
			   for(var key in $scope.global_kpis.project_status){
			   	      $scope.detail_followed_projects.push($scope.global_kpis.project_status[key]);
			   }
			   $scope.detail_followed_project_colors = ["#97bbcd","#dcdcdc","#98f2f2","#46bfbd","#fdb45c","#949fb1","#4d5360","#f7464a","#1bd100"];
			   // section 2 followed project spoc secbydesign
			   console.log($scope.customers);
			   // radar section 2 spoc occupation
			   $scope.spocs = [{
			   		auditor:"Boris NCHO",
			   		project_followed:20
			   },
			   {
			   		auditor:"Emmanuel RIEHL",
			   		project_followed:15
			   },{
			   		auditor:"Hafsa ZGUIOUI",
			   		project_followed:26
			   }];

			   // Risk EVOLUTIONS
				  $scope.labels_risk_evolved = ["Trimestre 1", "Trimestre 2", "Trimestre 3", "Trimestre 4"];
				  $scope.series_list_evolved = ['NSIA Banque','BPM','BPEC','TOGO'];
				  $scope.data_risk_evoled = [
				    [65, 59, 80, 81],
				    [28, 48, 40, 19],
				    [86, 27, 90, 28],
				    [76, 10, 30, 55]
				  ];

			  $scope.data_bar_risk_evolved_labels = ['2015', '2016', '2017', '2018', '2019'];
			  $scope.data_bar_risk_evolved_series = ['Risque Avant', 'Risque Après'];

			  $scope.data_bar_risk_evolved_labels_datas = [
			    [65, 59, 80, 81, 56],
			    [28, 48, 40, 19, 86]
			  ];

			   $scope.spoc_followed_simple_data = [20,15,26];
			   $scope.spoc_followed_simple_labels = ["Boris NCHO","Emmanuel RIEHL","Hafsa ZGUIOUI"];

			   $scope.labels_radar  = ["PCIDSS"];
			   $scope.data_radar = [];
			   $scope.data_series_radar = [];
			   $scope.radar_spoc_chart_options = {
						title:{ 
							display:true,
							text:'Occupation spoc secByDesign',
							fontSize:16,
						},
						tooltips:{
							intersect:false
						},
						legend:{
							display:true,
							position:'left'
						}
			   };

			   // $scope.data_series_radar
			   // data_radar
			   // labels_radar

			   $scope.radar_spoc_chart_options_charge = {
						title:{ 
							display:true,
							text:'Charge de Travail SMP',
							fontSize:16,
						},
						tooltips:{
							intersect:false
						},
						legend:{
							display:true,
							position:'left'
						}
			   };


			   $scope.labels_radar_charge =["PCIDSS", "PADSS", "PIN SECURITY", "3DS", "CARD PRODUCTION"];

			   $scope.data_radar_charge = [
			    [65, 59, 90, 81, 56, 55, 40],
			    [28, 48, 40, 19, 96, 27, 100],
			    [41, 39, 11, 20, 31, 52, 67]
			  ];

			  $scope.overrides_radar_charge=[
			  	{label:"Boris NCHO"},{label:"Hafsa ZGUIOUI"},{label:"Emmanuel RIEHL"}
			  ];


			   // Contextual radars
			   // Spocs missions

			   // repartition du risque
			   // $scope.risk_repartition_data = [0,$scope.global_kpis.project_carriers_stats_total.total_risk_before,$scope.global_kpis.project_carriers_stats_total.total_risk_actual];
			  //  $scope.risk_repartition_labels = ["Référence","Risque Avant","Risque Actuel"];
			  //  $scope.risk_repartition_colors = ["#dcdcdc","#f7464a","#1bd100"];
			  //  $scope.risk_repartition_chart_options = {
					// title:{
					// 	display:true,
					// 	text:'Evolution du risque global',
					// 	fontSize:16,
					// },
					// tooltips:{
					// 	intersect:false
					// }
				 // };

				  $scope.lines_risk_repartition_labels = $scope.labels_radar;
				  $scope.lines_risk_repartition_series = ['Avant', 'Actuel'];
				  $scope.data_repartition_lines = [];
				  var before_carrier_risk = [];
				  var actual_carrier_risk = [];
				  $scope.global_kpis.project_carriers_stats.forEach(function(element,index){
				  	before_carrier_risk.push(element.risk_before);
					actual_carrier_risk.push(element.risk_actual);
				  });
				  $scope.data_repartition_lines.push(before_carrier_risk);
				  $scope.data_repartition_lines.push(actual_carrier_risk);
				  $scope.lines_repartition_colors = ["#f7464a","#1bd100"];


			   $scope.lines_risk_repartition_options = {
					title:{
						display:true,
						text:'Evolution du risque/porteurs',
						fontSize:16,
					},
					tooltips:{
						intersect:false
					},
					legend:{
						display:true,
						position:'bottom'
					},
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
		};
		
		$scope.workflow_tab = 'history';
		$scope.current_selected_project = '';
		$scope.current_selected_project_index = '';
		$scope.refresh_current_selected = false;

		$scope.initial_audit_report_modal = '';
		$scope.initial_audit_report_modal_close = function(){
			$scope.determine_whole_audit_stats();
			$scope.initial_audit_report_modal = '';
		};
		$scope.initial_audit_report_modal_popup = function(){
			$scope.initial_audit_report_modal = 'is-active';
			console.log($scope.current_selected_project);
		};

		$scope.openViewModal = function(project,index){
			$scope.current_selected_project = project;
			$scope.current_selected_project_index = index;
		    $scope.showInfoProjectModal = 'is-active';
		    // initialize charts
			$scope.current_index_chart = 0;
		    $scope.alt_vuln = {};
		    $scope.init_dash_charts();
		    $scope.determine_whole_audit_stats();
		};


		//begin manage contextual stats
		$scope.refresh_stats_report_audit = function(){
			$scope.stats_report_audit = {
				conformity:0,
				in_place:0,
				not_in_place:0,
				not_applicable:0,
				total:0
			};
			$scope.whole_stats_report_audit = {
				conformity:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
				in_place:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
				not_in_place:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
				not_applicable:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
				total:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
				global_conformity:0,
				global_in_place:0,
				global_not_inplace:0,
				global_not_applicable:0,
				global_total:0
			};
		};

		$scope.workflow_tab_initial_audit_report = 'cond1';

		$scope.workflow_tab_initial_audit_report_eval = function(condition,condition_id){
		  $scope.workflow_tab_initial_audit_report = condition;
		  if(condition != 'info')
		  	$scope.determine_audit_stats(condition_id);
		};

		$scope.determine_audit_stats = function(condition_id){
			$scope.stats_report_audit = {
				conformity:0,
				in_place:0,
				not_in_place:0,
				not_applicable:0,
				total:0
			};
		  $scope.current_selected_project.forEach(function(element){
		  	if(element.parent_condition_id == condition_id){
		  		if(element.procedure_verdict != "N/T")
			  		$scope.stats_report_audit.total++;
			  	if(element.procedure_verdict == "N/A")
			  		$scope.stats_report_audit.not_applicable++;
			  	if(element.procedure_verdict == "Oui")
			  		$scope.stats_report_audit.in_place++;
			  	if(element.procedure_verdict == "Non")
			  		$scope.stats_report_audit.not_in_place++;
		  	}
		  });
		    $scope.stats_report_audit.conformity = (Math.round(($scope.stats_report_audit.in_place/$scope.stats_report_audit.total)*100)).toFixed(2);
		};

		$scope.determine_whole_audit_stats = function(){
		  let parent_condition = 1; 
		  $scope.refresh_stats_report_audit();
		  $scope.current_selected_project.project_meta.pcidssv321.forEach(function(element){
		  	if(element.parent_condition_id != parent_condition){
		  		parent_condition = element.parent_condition_id;
		  	}
		  		if(element.procedure_verdict != "N/T")
			  		$scope.whole_stats_report_audit.total[parent_condition-1].ex++;
			  	if(element.procedure_verdict == "N/A")
			  		$scope.whole_stats_report_audit.not_applicable[parent_condition-1].ex++;
			  	if(element.procedure_verdict == "Oui")
			  		$scope.whole_stats_report_audit.in_place[parent_condition-1].ex++;
			  	if(element.procedure_verdict == "Non")
			  		$scope.whole_stats_report_audit.not_in_place[parent_condition-1].ex++;
		  });
		  var global_conformity = 0,global_in_place=0,global_not_inplace=0,global_not_applicable=0,global_total = 0;
		  for(i=0;i<12;i++){
		  	let conformity = (Math.round(($scope.whole_stats_report_audit.in_place[i].ex/$scope.whole_stats_report_audit.total[i].ex)*100)).toFixed(2);
		  	$scope.whole_stats_report_audit.conformity[i].ex = conformity;
		  	global_conformity += parseFloat($scope.whole_stats_report_audit.conformity[i].ex);
		  	global_in_place += $scope.whole_stats_report_audit.in_place[i].ex;
		  	global_not_inplace += $scope.whole_stats_report_audit.not_in_place[i].ex;
		  	global_not_applicable += $scope.whole_stats_report_audit.not_applicable[i].ex;
		  	global_total += $scope.whole_stats_report_audit.total[i].ex;
		  }
		  $scope.whole_stats_report_audit.global_conformity = (Math.round(global_conformity/12)).toFixed(2);
		  $scope.whole_stats_report_audit.global_in_place = global_in_place;
		  $scope.whole_stats_report_audit.global_not_inplace = global_not_inplace;
		  $scope.whole_stats_report_audit.global_not_applicable = global_not_applicable;
		  $scope.whole_stats_report_audit.global_total = global_total;
		  $scope.data_audit_radar = [[$scope.whole_stats_report_audit.conformity[0].ex, $scope.whole_stats_report_audit.conformity[1].ex,$scope.whole_stats_report_audit.conformity[2].ex,$scope.whole_stats_report_audit.conformity[3].ex,$scope.whole_stats_report_audit.conformity[4].ex,$scope.whole_stats_report_audit.conformity[5].ex,$scope.whole_stats_report_audit.conformity[6].ex,$scope.whole_stats_report_audit.conformity[7].ex,$scope.whole_stats_report_audit.conformity[8].ex,$scope.whole_stats_report_audit.conformity[9].ex,$scope.whole_stats_report_audit.conformity[10].ex,$scope.whole_stats_report_audit.conformity[11].ex]];
		};


		// end manage contextual dialog box
		$scope.closeInfoModal = function(){
			$scope.current_selected_project = '';
		    $scope.showInfoProjectModal = '';
		}

		$scope.init_dash_charts = function(){
				if($scope.current_selected_project.project_vulnerabilities.length>0){
				  $scope.current_selected_project.tmp_vulnerabilities = $scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].vulnerability_content;
				  $scope.current_selected_project.current_selected_vuln_report = $scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart];
				  $scope.init_alt_vulns();
				}
				else{
				  $scope.current_selected_project.tmp_vulnerabilities = [];
				  $scope.current_selected_project.current_selected_vuln_report = {};
				}

				// Default chart options
				$scope.bar_default_chart_options = {
					title:{
						display:true,
						text:'Cartographie des vulnérabilités',
						fontSize:16,
					},
					tooltips:{
						intersect:false
					},
					legend:{
						display:true,
						position:'left'
					}
				 };

				$scope.pie_default_chart_options = {
					title:{
						display:true,
						text:'Résumé des découvertes',
						fontSize:16,
					},
					tooltips:{
						intersect:false
					},
					legend:{
						display:true,
						position:'left'
					}
				 };
  				// initializing charts
				$scope.vuln_riskratings_chart = {};
				$scope.colors_pie =['#c00000','#ffc000','#a8d08d','#bdd6ee'];

  				$scope.data_pie_vuln = [];
  				$scope.data_pie_labels = [];
  				$scope.ref_data_pie_vuln = {};
  				
  				$scope.data_bars_vuln = [];
  				$scope.ref_data_bars = {};
  				$scope.series_bars = [];
  				$scope.data_bars_labels = [];

  				// filling pie chart
  				$scope.register.project_deliverables.reports.severities.forEach(function(element){
  					$scope.data_pie_labels.push(element.literal_rating);
  					$scope.series_bars.push(element.literal_rating);
  					$scope.ref_data_pie_vuln[element.rating]=0;
  					$scope.data_pie_vuln.push($scope.ref_data_pie_vuln[element.rating]);
  				});
  				// filling bars chart

  				// Filing categories
  				$scope.register.project_deliverables.reports.categories.forEach(function(category){
  					$scope.data_bars_labels.push(category.literal_category);
  				});

  				$scope.register.project_deliverables.reports.severities.forEach(function(severity){
  					$scope.vuln_riskratings_chart[severity.rating] = {};
  					var tmp_ref_bars = [];
  					$scope.register.project_deliverables.reports.categories.forEach(function(category){
  						$scope.vuln_riskratings_chart[severity.rating][category.category] = 0;
  						tmp_ref_bars.push($scope.vuln_riskratings_chart[severity.rating][category.category]);
  					});
  					$scope.data_bars_vuln.push(tmp_ref_bars);
  				});

  				if($scope.current_selected_project.project_vulnerabilities.length>0)
  					$scope.modelize_existing_charts();
		};

		$scope.init_alt_vulns = function(){
			$scope.alt_vuln = {
				begin_date: new Date($scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].begin_date),
				end_date: new Date($scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].end_date),
				vulnerability_report_type:$scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].vulnerability_report_type,
				vulnerability_report_denomination:$scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].vulnerability_report_denomination,
				issue:false
			};
		};

		$scope.set_state_project_row = function(project_is_closed){
			if(project_is_closed)
				return 'eben-salmon-b';
			else
				return '';
		};

		$scope.modelize_existing_charts = function(){
			let vuln_object = $scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart];
			for(var item in vuln_object.vulnerability_content){
				$scope.vuln_riskratings_chart[vuln_object.vulnerability_content[item].riskrating][vuln_object.vulnerability_content[item].type]++;
			}
				// Filling pie chart
				$scope.data_pie_vuln = [];
				$scope.data_bars_vuln = [];
				for(var severity in $scope.vuln_riskratings_chart){
					if($scope.ref_data_pie_vuln.hasOwnProperty(severity)){
						var eval_severity = 0;
						var tmp_ref_bars = [];
						for(var category in $scope.vuln_riskratings_chart[severity]){
							eval_severity+=$scope.vuln_riskratings_chart[severity][category];
  							tmp_ref_bars.push($scope.vuln_riskratings_chart[severity][category]);
						}
						$scope.data_pie_vuln.push(eval_severity);
  						$scope.data_bars_vuln.push(tmp_ref_bars);
					}
				}
		};

		Registers.retrieve().then(response=>{
			$scope.register = response.data.register;
			$scope.dashboard_types = $scope.register.projects.dept_short;
		});

		Registers.resource("solutions_pcidss321").then(response=>{
				$scope.solutions_pcidss321=response.data.content;
			});

		$scope.update_current_selected_vuln_report = function(id_report){
			$scope.current_selected_project.project_vulnerabilities.forEach(function(element,index){
				if(element.id === id_report){
					$scope.current_index_chart = index;
					$scope.init_dash_charts();
				}
			});
		};


	}]).controller('ProjectsController',['$scope','Projects','Upload','Registers','ProjectAccompaniments','ProjectPlannings','$filter','ProjectVulnerabilities', function($scope,Projects,Upload,Registers,ProjectAccompaniments,ProjectPlannings,$filter,ProjectVulnerabilities){
		var self = this;
		$scope.showInfoProjectModal = '';
		$scope.addAssetModalTrigger = '';

		$scope.workflow_tab = 'history';
		$scope.current_selected_project = '';
		$scope.current_selected_project_index = '';
		$scope.refresh_current_selected = false;

		$scope.load_projects = function(){
			Projects.retrieve().then(response=>{
				$scope.projects = response.data.projects;
				$scope.projects.forEach(function(element){
					element.project_meta = JSON.parse(element.project_meta);
					element.project_accompaniments.forEach(function(element){
						element.accompaniments_meta = JSON.parse(element.accompaniments_meta);
					});
					element.project_deliverables.forEach(function(element){
						element.deliverable_meta = JSON.parse(element.deliverable_meta);
					});
					element.project_plannings.forEach(function(element){
						element.planning_meta = JSON.parse(element.planning_meta);
						if(element.planning_meta.t_1_date)
						  element.planning_meta.t_1_date = new Date(element.planning_meta.t_1_date);
						else
						  element.planning_meta.t_1_date = null;

						if(element.planning_meta.t1_date)
						  element.planning_meta.t1_date = new Date(element.planning_meta.t1_date);
						else
						  element.planning_meta.t1_date = null;

						if(element.planning_meta.t3_date)
						  element.planning_meta.t3_date = new Date(element.planning_meta.t3_date);
						else
						  element.planning_meta.t3_date = null;

						if(element.planning_meta.t3c_date)
						  element.planning_meta.t3c_date = new Date(element.planning_meta.t3c_date);
						else
						  element.planning_meta.t3c_date = null;
					});
					element.project_vulnerabilities.forEach(function(element){
						element.vulnerability_content = JSON.parse(element.vulnerability_content);
					});
				});
				if($scope.refresh_current_selected){
					$scope.current_selected_project =$scope.projects[$scope.current_selected_project_index];
					$scope.refresh_current_selected = false;
					$scope.init_charts();
				}
			},err=>{
				toastr.error('Une erreur est survenue lors du chargement des données.')
			});
		};
		$scope.load_projects();

		Registers.retrieve().then(response=>{
			$scope.register = response.data.register;
			return true;
		}).then(response=>{
			Registers.resource("pcidssv321").then(response=>{
				$scope.pcidssv321=response.data.content;
				$scope.pcidssv321_backup=response.data.content;
			});
		}).then(response=>{
				Registers.resource("solutions_pcidss321").then(response=>{
				$scope.solutions_pcidss321=response.data.content;
			});
		});

		$scope.openViewModal = function(project,index){
			$scope.current_selected_project = project;
			if($scope.current_selected_project.project_meta.hasOwnProperty('pcidssv321')){
				$scope.pcidssv321 = $scope.current_selected_project.project_meta.pcidssv321;
			}else
			   $scope.pcidssv321=$scope.pcidssv321_backup;
			$scope.current_selected_project_index = index;
		    $scope.showInfoProjectModal = 'is-active';
		    // initialize charts
			$scope.current_index_chart = 0;
		    $scope.alt_vuln = {};
		    $scope.init_charts();
		    $scope.determine_whole_audit_stats();
		};
		$scope.closeInfoModal = function(){
			$scope.current_selected_project = '';
		    $scope.showInfoProjectModal = '';
		};

		// manage upload deliverables
		$scope.is_upload_asset = '';
		$scope.upload_asset_project = {};

		$scope.openDelModal = function(project){
			$scope.addAssetModalTrigger = 'is-active';
			$scope.upload_asset_project={
				project_id:project.id
			}

		};

		$scope.clear_assets = function(){
				$scope.upload_asset_project.assets.forEach(function(element, index){
					$scope.upload_asset_project.assets.splice(index);
				});
		};

		$scope.closeDelModal = function(){
				$scope.addAssetModalTrigger = '';
				$scope.upload_asset_project.assets.forEach(function(element, index){
					$scope.upload_asset_project.assets.splice(index);
				});
		};



		$scope.upload_asset = function(upload_asset_project){
				upload_asset_project.asset_types = [];

				upload_asset_project.assets.forEach(function(element, index){
					upload_asset_project.asset_types.push(element.deliverable_type);
				});
				$scope.is_upload_asset = true;
				Upload.upload({	
					url:'/project_deliverables/add',
					data: upload_asset_project
				}).then(function(resp){
				    toastr.success("Enregistrement réussi");
				    $scope.closeDelModal();
				    // load project deliverables
					$scope.load_projects();
				}, function(err){
				   $scope.is_upload_asset = '';					
				   toastr.error("Une erreur est survenue veuillez réessayer");
				});
		};

		$scope.inspect_asset = function(files){

		};

		$scope.remove_asset = function(asset, index){
				$scope.upload_asset_project.assets.splice(index,1);
				delete $scope.upload_asset_project.assets[index];
		};

		$scope.remove_asset_audit_box = function(asset, index){
				$scope.selected_requirement.assets.splice(index,1);
				delete $scope.selected_requirement.assets[index];
		};

		// manage accompaniments
		$scope.accompaniment_is_loading = '';
		$scope.project_accompaniment={
			existing:false
		};
		
		$scope.send_accompaniement = function(accompaniment){
			$scope.accompaniment_is_loading = 'is-loading';
			accompaniment.project_id = $scope.current_selected_project.id;

			if($scope.project_accompaniment.existing){
				ProjectAccompaniments.update(accompaniment).then(function(resp){
					toastr.success('Point de suivi modifié');
					$scope.refresh_current_selected = true;
					$scope.load_projects();
				}, function(err){
					toastr.error('Une erreur est survenue, veuillez réessayer');
				}).finally(function(){
					$scope.accompaniment_is_loading = '';
				});
			}else{
				ProjectAccompaniments.create(accompaniment).then(function(resp){
					toastr.success('Point de suivi enregistré');
					$scope.refresh_current_selected = true;
					$scope.load_projects();
				}, function(err){
					toastr.error('Une erreur est survenue, veuillez réessayer');
				}).finally(function(){
					$scope.accompaniment_is_loading = '';
				});
			}

		};
		$scope.destroy_accompaniment = function(){
			$scope.project_accompaniment={
				existing:false
			};
		}

		$scope.render_accompaniment = function(accompaniment,type){
			switch(type){
				case 'marker':
				   var marker_return ='is-eben';
				   if(accompaniment.accompaniments_meta.type == "Point")
				    		marker_return = 'is-eben';
				   else if(accompaniment.accompaniments_meta.type == "Indisponibilité")
				    		marker_return = 'is-warning';
				   else if(accompaniment.accompaniments_meta.type == "Alerte")
				    		marker_return ='is-danger';
				   else
				    		marker_return ='is-primary';

				    return marker_return;
				break;

				case 'type':
				   var type_return ='is-eben';
				   if(accompaniment.accompaniments_meta.type == "Point")
				    		type_return = 'is-eben';
				   else if(accompaniment.accompaniments_meta.type == "Indisponibilité")
				    		type_return = 'is-warning';
				   else if(accompaniment.accompaniments_meta.type == "Alerte")
				    		type_return ='is-danger';
				   else
				    		type_return ='is-primary';

				    return type_return;
				break;

				case 'icon':
				    switch(accompaniment.accompaniments_meta.type){
				    	case 'Point':
				    		return 'is-eben';
				    	break;

						case 'Indisponibilité':
							return 'is-warning';
						break;

						case 'Alerte':
							return 'is-danger';
						break;
				    }
				break;
			}
		};

		$scope.edit_accompaniment=function(accompaniment){
			$scope.project_accompaniment = accompaniment;
			$scope.project_accompaniment.existing = true;
		};

		// manage planning
		$scope.update_project_planning = function(planning){
					var conf = confirm('Etes-Vous sûre de vouloir modifier le planning?');
					if(conf){
							planning.project_id = $scope.current_selected_project.id;
						    ProjectPlannings.update(planning).then(function(resp){
							toastr.success('Planning mis à jour avec succès');
							$scope.refresh_current_selected = true;
							$scope.load_projects();
						}, function(err){
							toastr.error('Une erreur est survenue, veuillez réessayer');
						});
					} 
		};

		// Managing vulnerabilities map
		$scope.vuln_filter = '';

		$scope.evalute_risk = function(vuln_type,vuln_risk,vuln_action,vuln_old_risk = null){
				switch(vuln_action){
					case 'add':
						$scope.vuln_riskratings_chart[vuln_risk][vuln_type]++;
					break;

					case 'minus':
						$scope.vuln_riskratings_chart[vuln_risk][vuln_type]--;
					break;

					case 'change':
						$scope.vuln_riskratings_chart[vuln_old_risk][vuln_type]--;
						$scope.vuln_riskratings_chart[vuln_risk][vuln_type]++;
					break;
				}
				$scope.modelize_charts($scope.vuln_riskratings_chart);
		};
		
		$scope.modelize_charts = function(vuln_riskratings_chart){

				// Filling pie chart
				$scope.data_pie_vuln = [];
				$scope.data_bars_vuln = [];
				for(var severity in $scope.vuln_riskratings_chart){
					if($scope.ref_data_pie_vuln.hasOwnProperty(severity)){
						var eval_severity = 0;
						var tmp_ref_bars = [];
						for(var category in $scope.vuln_riskratings_chart[severity]){
							eval_severity+=$scope.vuln_riskratings_chart[severity][category];
  							tmp_ref_bars.push($scope.vuln_riskratings_chart[severity][category]);
						}
						$scope.data_pie_vuln.push(eval_severity);
  						$scope.data_bars_vuln.push(tmp_ref_bars);
					}
				}
		};

		$scope.modelize_existing_charts = function(){
			let vuln_object = $scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart];
			for(var item in vuln_object.vulnerability_content){
				$scope.vuln_riskratings_chart[vuln_object.vulnerability_content[item].riskrating][vuln_object.vulnerability_content[item].type]++;
			}
				// Filling pie chart
				$scope.data_pie_vuln = [];
				$scope.data_bars_vuln = [];
				for(var severity in $scope.vuln_riskratings_chart){
					if($scope.ref_data_pie_vuln.hasOwnProperty(severity)){
						var eval_severity = 0;
						var tmp_ref_bars = [];
						for(var category in $scope.vuln_riskratings_chart[severity]){
							eval_severity+=$scope.vuln_riskratings_chart[severity][category];
  							tmp_ref_bars.push($scope.vuln_riskratings_chart[severity][category]);
						}
						$scope.data_pie_vuln.push(eval_severity);
  						$scope.data_bars_vuln.push(tmp_ref_bars);
					}
				}
		};

		$scope.add_vuln = function(vuln){
			var description =vuln.description;
			var is_already_selected = false;
			$scope.current_selected_project.tmp_vulnerabilities.forEach(function(element,index){
				if(element.description === description){
					toastr.warning('Cette vulnérabilité a déjà été identifiée');
					is_already_selected = true;
				}
			});
			if(!is_already_selected)
				$scope.add_persistent_vulns(vuln);
		};
		$scope.add_persistent_vulns = function(vuln){
				let temp_vuln = {
					description:vuln.description,
					type:vuln.type,
					riskrating:vuln.riskrating,
					scope:"",
					resume:vuln.resume,
					recommandation:vuln.recommandation
				};
				$scope.current_selected_project.tmp_vulnerabilities.push(temp_vuln);
				$scope.evalute_risk(temp_vuln.type,temp_vuln.riskrating,'add');
		};

		$scope.remove_vuln = function(vuln, index){
				$scope.current_selected_project.tmp_vulnerabilities.splice(index,1);
				$scope.evalute_risk(vuln.type,vuln.riskrating,'minus');
		};

		$scope.init_alt_vulns = function(){
			$scope.alt_vuln = {
				begin_date: new Date($scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].begin_date),
				end_date: new Date($scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].end_date),
				vulnerability_report_type:$scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].vulnerability_report_type,
				vulnerability_report_denomination:$scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].vulnerability_report_denomination,
				issue:false
			};
		};

		$scope.init_charts = function(){
				if($scope.current_selected_project.project_vulnerabilities.length>0){
				  $scope.current_selected_project.tmp_vulnerabilities_id = $scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].id;
				  $scope.current_selected_project.tmp_vulnerabilities = $scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].vulnerability_content;
				  $scope.current_selected_project.current_selected_vuln_report = $scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart];
				  $scope.init_alt_vulns();
				}
				else{
				  $scope.current_selected_project.tmp_vulnerabilities = [];
				  $scope.current_selected_project.current_selected_vuln_report = {};
				}

				// Default chart options
				$scope.bar_default_chart_options = {
					title:{
						display:true,
						text:'Cartographie des vulnérabilités',
						fontSize:16,
					},
					tooltips:{
						intersect:false
					},
					legend:{
						display:true,
						position:'left'
					}
				 };

				$scope.pie_default_chart_options = {
					title:{
						display:true,
						text:'Résumé des découvertes',
						fontSize:16,
					},
					tooltips:{
						intersect:false
					},
					legend:{
						display:true,
						position:'left'
					}
				 };
  				// initializing charts
				$scope.vuln_riskratings_chart = {};
				$scope.colors_pie =['#c00000','#ffc000','#a8d08d','#bdd6ee'];

  				$scope.data_pie_vuln = [];
  				$scope.data_pie_labels = [];
  				$scope.ref_data_pie_vuln = {};
  				
  				$scope.data_bars_vuln = [];
  				$scope.ref_data_bars = {};
  				$scope.series_bars = [];
  				$scope.data_bars_labels = [];

  				// filling pie chart
  				$scope.register.project_deliverables.reports.severities.forEach(function(element){
  					$scope.data_pie_labels.push(element.literal_rating);
  					$scope.series_bars.push(element.literal_rating);
  					$scope.ref_data_pie_vuln[element.rating]=0;
  					$scope.data_pie_vuln.push($scope.ref_data_pie_vuln[element.rating]);
  				});
  				// filling bars chart

  				// Filing categories
  				$scope.register.project_deliverables.reports.categories.forEach(function(category){
  					$scope.data_bars_labels.push(category.literal_category);
  				});

  				$scope.register.project_deliverables.reports.severities.forEach(function(severity){
  					$scope.vuln_riskratings_chart[severity.rating] = {};
  					var tmp_ref_bars = [];
  					$scope.register.project_deliverables.reports.categories.forEach(function(category){
  						$scope.vuln_riskratings_chart[severity.rating][category.category] = 0;
  						tmp_ref_bars.push($scope.vuln_riskratings_chart[severity.rating][category.category]);
  					});
  					$scope.data_bars_vuln.push(tmp_ref_bars);
  				});

  				if($scope.current_selected_project.project_vulnerabilities.length>0)
  					$scope.modelize_existing_charts();
		};

		$scope.update_project_vulnerabilities = function(object){
				var r = confirm("Etes-vous sûre de vouloir effectuer cette action ? ");
				if(r){
					object['vulnerability_content'] = $scope.current_selected_project.tmp_vulnerabilities;
					object['project_id'] = $scope.current_selected_project.id;
					if(object['issue'] === false)
						object['project_vulnerability_id'] = $scope.current_selected_project.project_vulnerabilities[$scope.current_index_chart].id;
					else
						delete object['project_vulnerability_id'];
					
					ProjectVulnerabilities.add(object).then(response=>{
						    toastr.success('Actualisation réussie');
							$scope.refresh_current_selected = true;
							$scope.load_projects();
					},error=>{
						toastr.error('Une erreur est survenue, veuillez réessayer');
					});
				}
		};

		$scope.filling_report_denomination = function(alt_vuln,denomination){
			alt_vuln.vulnerability_report_denomination = denomination;
		};

		$scope.update_current_selected_vuln_report = function(id_report){
			$scope.current_selected_project.project_vulnerabilities.forEach(function(element,index){
				if(element.id === id_report){
					$scope.current_index_chart = index;
					$scope.init_charts();
				}
			});
		};

		// manage closing projects
		$scope.close_project = function(project,project_id){
			var conf = confirm("Etes-vous sûre de vouloir clore/rouvrir le projet?");
			if(conf){
				Projects.close(project_id).then(response=>{
					toastr.success("Action réalisée avec succès");
					if(project.project_is_closed)
						project.project_is_closed = false;
					else
						project.project_is_closed = true;
				},error=>{
					toastr.error("Une erreur est survenue, veuillez réessayer");
				});
			}
		};

		$scope.set_state_project_row = function(project_is_closed){
			if(project_is_closed)
				return 'eben-salmon-b';
			else
				return '';
		};

		$scope.quick_view_trigger = '';
		$scope.quick_view_current_selected_vuln = '';
		$scope.current_recommandation ='';

		$scope.tinymceModel = {
			content_resume:"",
			content_recommandation:""
		};

		$scope.tinymceOptions = {
		      plugins: 'wordcount visualblocks visualchars save toc preview pagebreak print image advlist  code textcolor colorpicker contextmenu emoticons fullscreen lists searchreplace insertdatetime table',
		      toolbar: 'undo redo| copy cut paste | styleselect | outdent indent |preview print bullist | bold italic | alignleft aligncenter alignright | code forecolor backcolor emoticons fullscreen | wordcount visualblocks visualchars',
		      contextmenu: "pagebreak | link image inserttable | cell row column deletetable",
  			  advlist_bullet_styles: 'square',
  			  toc_depth: 4,
    		  height: 100,
  			  menubar:"insert file view",
  			  advlist_number_styles: 'lower-alpha,lower-roman,upper-alpha,upper-roman'
	    };

		$scope.edit_recommandation = function(index,resume,recommandation){
			$scope.quick_view_current_selected_vuln = index;
			$scope.quick_view_trigger = 'is-active';
			$scope.tinymceModel.content_resume = resume;
			$scope.tinymceModel.content_recommandation = recommandation;
		};
		
		$scope.close_quick_view = function(){
			$scope.quick_view_trigger = '';
		};	

		$scope.save_edit_recommandation = function(){
			$scope.current_selected_project.tmp_vulnerabilities[$scope.quick_view_current_selected_vuln].recommandation = $scope.tinymceModel.content_recommandation;
			$scope.current_selected_project.tmp_vulnerabilities[$scope.quick_view_current_selected_vuln].resume = $scope.tinymceModel.content_resume;
			$scope.tinymceModel = {
				content_resume:"",
				content_recommandation:""
			};
			$scope.quick_view_trigger = "";
		};

		$scope.determine_risk_color = function(riskrating){
			var color = '';
			switch(riskrating){
				case 'critique':
					color = 'red_select';
				break;

				case 'eleve':
					color = 'red_yellow';
				break;

				case 'moyen':
					color = 'red_green';
				break;

				case 'faible':
					color = 'red_blue';
				break;
			}
			return color;
		};

		// manage project view - initial audit report - smp - pcidss
		$scope.initial_audit_report_modal = '';
		$scope.initial_audit_report_modal_close = function(){
			$scope.determine_whole_audit_stats();
			$scope.initial_audit_report_modal = '';
		};
		$scope.initial_audit_report_modal_popup = function(){
			$scope.initial_audit_report_modal = 'is-active';
		};
		$scope.refresh_stats_report_audit = function(){
			$scope.stats_report_audit = {
				conformity:0,
				in_place:0,
				not_in_place:0,
				not_applicable:0,
				total:0
			};
			$scope.whole_stats_report_audit = {
				conformity:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
				in_place:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
				not_in_place:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
				not_applicable:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
				total:[{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0},{ex:0}],
				global_conformity:0,
				global_in_place:0,
				global_not_inplace:0,
				global_not_applicable:0,
				global_total:0
			};
		};
		$scope.refresh_stats_report_audit();

		$scope.workflow_tab_initial_audit_report = 'cond1';

		$scope.workflow_tab_initial_audit_report_eval = function(condition,condition_id){
		  $scope.workflow_tab_initial_audit_report = condition;
		  if(condition != 'info')
		  	$scope.determine_audit_stats(condition_id);
		  else	
		  	$scope.determine_whole_audit_stats();
		};

		$scope.determine_audit_stats = function(condition_id){
		  $scope.refresh_stats_report_audit();
		  $scope.pcidssv321.forEach(function(element){
		  	if(element.parent_condition_id == condition_id){
		  		if(element.procedure_verdict != "N/T")
			  		$scope.stats_report_audit.total++;
			  	if(element.procedure_verdict == "N/A")
			  		$scope.stats_report_audit.not_applicable++;
			  	if(element.procedure_verdict == "Oui")
			  		$scope.stats_report_audit.in_place++;
			  	if(element.procedure_verdict == "Non")
			  		$scope.stats_report_audit.not_in_place++;
		  	}
		  });
		    $scope.stats_report_audit.conformity = (Math.round(($scope.stats_report_audit.in_place/$scope.stats_report_audit.total)*100)).toFixed(2);
		};

		$scope.determine_whole_audit_stats = function(){	
		  let parent_condition = 1; 
		  $scope.refresh_stats_report_audit();
		  $scope.pcidssv321.forEach(function(element){
		  	if(element.parent_condition_id != parent_condition){
		  		parent_condition = element.parent_condition_id;
		  	}
		  		if(element.procedure_verdict != "N/T")
			  		$scope.whole_stats_report_audit.total[parent_condition-1].ex++;
			  	if(element.procedure_verdict == "N/A")
			  		$scope.whole_stats_report_audit.not_applicable[parent_condition-1].ex++;
			  	if(element.procedure_verdict == "Oui")
			  		$scope.whole_stats_report_audit.in_place[parent_condition-1].ex++;
			  	if(element.procedure_verdict == "Non")
			  		$scope.whole_stats_report_audit.not_in_place[parent_condition-1].ex++;
		  });
		  var global_conformity = 0,global_in_place=0,global_not_inplace=0,global_not_applicable=0,global_total = 0;
		  for(i=0;i<12;i++){
		  	let conformity = (Math.round(($scope.whole_stats_report_audit.in_place[i].ex/$scope.whole_stats_report_audit.total[i].ex)*100)).toFixed(2);
		  	$scope.whole_stats_report_audit.conformity[i].ex = conformity;
		  	global_conformity += parseFloat($scope.whole_stats_report_audit.conformity[i].ex);
		  	global_in_place += $scope.whole_stats_report_audit.in_place[i].ex;
		  	global_not_inplace += $scope.whole_stats_report_audit.not_in_place[i].ex;
		  	global_not_applicable += $scope.whole_stats_report_audit.not_applicable[i].ex;
		  	global_total += $scope.whole_stats_report_audit.total[i].ex;
		  }
		  $scope.whole_stats_report_audit.global_conformity = (Math.round(global_conformity/12)).toFixed(2);
		  $scope.whole_stats_report_audit.global_in_place = global_in_place;
		  $scope.whole_stats_report_audit.global_not_inplace = global_not_inplace;
		  $scope.whole_stats_report_audit.global_not_applicable = global_not_applicable;
		  $scope.whole_stats_report_audit.global_total = global_total;
		  $scope.data_audit_radar = [[$scope.whole_stats_report_audit.conformity[0].ex, $scope.whole_stats_report_audit.conformity[1].ex,$scope.whole_stats_report_audit.conformity[2].ex,$scope.whole_stats_report_audit.conformity[3].ex,$scope.whole_stats_report_audit.conformity[4].ex,$scope.whole_stats_report_audit.conformity[5].ex,$scope.whole_stats_report_audit.conformity[6].ex,$scope.whole_stats_report_audit.conformity[7].ex,$scope.whole_stats_report_audit.conformity[8].ex,$scope.whole_stats_report_audit.conformity[9].ex,$scope.whole_stats_report_audit.conformity[10].ex,$scope.whole_stats_report_audit.conformity[11].ex]];
		};

		$scope.determine_audit_verdict_color_initial_report = function(verdict){
			var color = '';
			switch(verdict){
				case 'Oui':
					color = 'cell_green';
				break;

				case 'Non':
					color = 'cell_red';
				break;

				case 'N/A':
					color = 'cell_yellow';
				break;

				case 'N/T':
					color = 'cell_blue';
				break;
			}
			return color;
		};

		$scope.eval_audit_verdict_color_initial_report = function(new_verdict, condition_id){
			let background_color_stripe ='';
			switch(new_verdict){
				case 'Oui':
					background_color_stripe = 'cell_stripe_green';
				break;

				case 'Non':
					background_color_stripe = 'cell_stripe_red';
				break;

				case 'N/A':
					background_color_stripe = 'cell_stripe_yellow';
				break;

				case 'N/T':
					background_color_stripe = 'cell_stripe_blue';
				break;

				default:
					background_color_stripe = '';
				break
			}
			$scope.determine_audit_stats(condition_id);
			return background_color_stripe;
		};

		$scope.submit_report_audit_initial = function(){
			console.log($scope.pcidssv321);
		};
		// directive trigger
		$scope.triggerSubmit = function(){
				var r = confirm('Etes-vous sûre de vouloir réaliser cette action?');
				if(r == true)
				{
					if(!$scope.current_selected_project.project_meta.hasOwnProperty("pcidssv321"))
					   $scope.current_selected_project.project_meta.pcidssv321 = $scope.pcidssv321;
					// $scope.is_loading = "";
					Upload.upload({
						url:'/projects/refresh',
						data:{project:$scope.current_selected_project}
					}).then(function(resp){
						toastr.success('Informations enregistrées avec succès');
					}, function(err){
						toastr.error('Une erreur est survenue, veuillez réessayer');
					}, function(evt){
					}).finally(function(){
						$scope.is_loading = '';
					});
				}
		};
		// clean report function
		$scope.cleanReport= function(){
			// $scope.pcidssv321=$scope.pcidssv321_backup;
		};
		$scope.data_audit_labels =["Condition 1", "Condition 2", "Condition 3", "Condition 4", "Condition 5", "Condition 6", "Condition 7", "Condition 8", "Condition 9", "Condition 10", "Condition 11", "Condition 12"];
		$scope.options_audit_radar = {
		  		title:{
		  			display:true,
		  			text:"Niveau de conformité au Standard PCIDSS v3.2.1",
		  			fontSize:18
		  		}
		  };
		  $scope.data_audit_radar = [[0,0,0,0,0,0,0,0,0,0,0,0,]];
		  $scope.audit_radar_colors =["#d61a27","#97bbcd"];
		  // Manage quickview audit-box
		  $scope.initial_audit_report_quick_view_trigger = '';
		  $scope.initial_audit_report_quick_view_condition_id = 0;
		  $scope.show_initial_audit_report_quick_view = function(condition_id){
		   $scope.initial_audit_report_quick_view_trigger = 'is-active';
		   $scope.initial_audit_report_quick_view_condition_id = condition_id;
		  };
		  $scope.close_initial_audit_report_quick_view = function(condition_id){
		   $scope.initial_audit_report_quick_view_trigger = '';
		  };

		  $scope.selected_requirement = {};
		  $scope.selected_requirement_index = '';

		  $scope.add_proof_modal_trigger = '';
		  $scope.open_add_proof_modal_trigger = function(requirement,index){
		    $scope.selected_requirement = requirement;
		    $scope.selected_requirement_index = index;
		    $scope.add_proof_modal_trigger = 'is-active';
		    console.log(requirement);
		  };
		  $scope.close_add_proof_modal_trigger = function(){
		    $scope.pcidssv321[$scope.selected_requirement_index] = $scope.selected_requirement;
		    $scope.selected_requirement = {};
		    $scope.add_proof_modal_trigger = '';
		  };

	}]).controller('ProjectsAddController',['$scope','Registers','Projects','$state', function($scope,Registers,Projects,$state){
		var self = this;
		$scope.search_actors = '';
		$scope.actors = [];

		$scope.addActorModalTrigger = '';
		Registers.retrieve().then(response=>{
			$scope.register = response.data.register;
			$scope.register.projects.team.forEach(function(element){
				let actor = {
					is_selected:false,
					fullname:element
				};
				$scope.actors.push(actor);
			});
		}).then(response=>{
			Registers.retrieve_countries_and_cities().then(function(response){
				$scope.register.countries_and_cities=response.data.register_countries_cities;
			});
		});

		$scope.project={
			project_meta:{
				contributors:[],
				project_customer:{}
			}
		};

		//Adding customer management
		$scope.hidden_customer_select_view = '';
		$scope.hidden_customer_info_view = 'is-hidden';
		$scope.vuln_filter_customer_project="";
		$scope.select_customer =(customer)=>{
			$scope.project.project_meta.project_customer = customer;
			$scope.hidden_customer_select_view = 'is-hidden';
		    $scope.hidden_customer_info_view = '';
		};
		$scope.destroy_customer_info_view=()=>{
			$scope.project.project_meta.project_customer='';
			$scope.hidden_customer_select_view = '';
		    $scope.hidden_customer_info_view = 'is-hidden';
		};
		// Submit project
		$scope.create = function(project){
			$scope.actors.forEach(function(element){
				if(element.is_selected)
				 $scope.project.project_meta.contributors.push(element)
			});
			$scope.project.project_meta.contributors.forEach(function(element, index){
				if(!element.is_selected)
				  delete $scope.project.project_meta.contributors[index];	
			});

			Projects.create(project).then(function(resp){
			              toastr.success('Projet enregistré avec succès');
			              $state.go('admins.projects.view',{reload:true});
			}, function(err){
			              toastr.error('Une erreur est survenue veuillez réessayer');
			}).finally(function(){
				$scope.project.project_meta.contributors = [];
			});
		};

		// actors adding management
		$scope.addActorSheetObject =(contributor)=>{
			contributor.is_selected = true;
		};

		$scope.retireActorSheetObject =(contributor)=>{
			contributor.is_selected = false;
		};

		// Modal management
		$scope.closeActorModal = function(){
			$scope.addActorModalTrigger = '';
		};

		$scope.openActorModal = function(){
			$scope.addActorModalTrigger = 'is-active';
		};


		$scope.go_back = function(){
			  $state.go('admins.projects.view',{reload:true});
		};

	}]).controller('ProjectsEditController',['$scope','Registers','Projects','$state','$stateParams','$window', function($scope,Registers,Projects,$state,$stateParams,$window){		
		$scope.search_actors = '';
		$scope.actors = [];
		$scope.addActorModalTrigger = '';
		
		Registers.retrieve().then(response=>{
			$scope.register = response.data.register;
			$scope.register.projects.team.forEach(function(element){
				let actor = {
					is_selected:false,
					fullname:element
				};
				$scope.actors.push(actor);
			});		
			return $scope.actors;
		}).then(response=>{
			Projects.load($stateParams.project_id).then(function(response){
				$scope.project = response.data.project;
				$scope.project.project_meta = JSON.parse($scope.project.project_meta);
				$scope.project.project_meta.contributors.forEach(function(contributor){
					$scope.actors.forEach(function(actor){
						if(contributor.fullname === actor.fullname){
							actor.is_selected = true;
							actor.role = contributor.role;
						}
					});
				});
			});
		},error=>{
			toastr("Une erreur est survenue, veuillez réessayer");
		});



		// Modal management
		$scope.closeActorModal = function(){
			$scope.addActorModalTrigger = '';
		};

		$scope.openActorModal = function(){
			$scope.addActorModalTrigger = 'is-active';
		};

		// actors adding management
		$scope.addActorSheetObject =(contributor)=>{
			contributor.is_selected = true;
		};

		$scope.retireActorSheetObject =(contributor)=>{
			contributor.is_selected = false;
		};

		$scope.edit = function(project){
			var conf = confirm("Etes-vous sûre de vouloir modifier ce projet");
			if(conf){
				project.project_meta.contributors = [];
				$scope.actors.forEach(function(element){
					if(element.is_selected)
						project.project_meta.contributors.push(element);
				});
				Projects.edit(project).then(function(response){
					toastr.success('Modification réalisée avec succès');
					$state.go('admins.projects.view',{reload:true});
				}, function(err){
					toastr.error('Une erreur est survenu, veuillez réessayer');
				});
			}
		};

		$scope.go_back = function(){
 			$window.history.back();
		};
	}]).controller('AccountsController',['$scope','Registers','Projects','$state','$stateParams','$window','userService','AccountService', function($scope,Registers,Projects,$state,$stateParams,$window,userService,AccountService){		
  				userService.all().then(function(resp){
				  	$scope.users = resp.data.users;
				});
				$scope.openViewModal = function(user){
					$scope.openViewModalTrigger = 'is-active';
					$scope.info_user = user;
				};

				$scope.closeViewModalTrigger = function(){
					$scope.openViewModalTrigger = '';
				};

			$scope.lock_user_account_trigger = function(user_account_id,user_account){
				var r = confirm('Etes-vous sûre de verrouiller cet utilisateur ?');
				if(r === true){
					AccountService.unlock(user_account_id).then(function(resp){
						toastr.success('Modifications réalisées avec succès');
						if(user_account.user_account_is_active == true)
							user_account.user_account_is_active = false;
						else
							user_account.user_account_is_active = true;

					}, function(){
						toastr.error('Une erreur est survenue, veuillez réessayer');
					});
				}
			};

			$scope.reinit_passsword = function(user_account_id){
				var r = confirm('Etes-vous sûre de vouloir réinitialiser le mot de passe de cet utilisateur?');
				if(r == true){
					AccountService.renew_password(user_account_id).then(function(resp){
						toastr.success('Réinitialisation réalisée avec succès');
					}, function(err){
							toastr.error('Une erreur est survenue, veuillez réessayer');
					});
				}
			};
	}]).controller('AccountsAddController',['$scope','Registers','Projects','$state','$stateParams','$window','userService','AccountService','roleAccountService','Upload', function($scope,Registers,Projects,$state,$stateParams,$window,userService,AccountService,roleAccountService,Upload){		
			roleAccountService.all().then(function(resp){
				$scope.roles = resp.data.roles;
			});

			$scope.upload = function(user){
				var r = confirm('Etes-vous sûre de vouloir créer un nouvel utilisateur');
				if(r == true)
				{
					$scope.is_loading = "is-loading";
					Upload.upload({
						url:'/accounts/add',
						data:{'user':user}
					}).then(function(resp){
						toastr.success('Compte créé avec succès');
						$state.go('admins.accounts.view',{reload:true});
					}, function(err){
						toastr.error('Une erreur est survenue, veuillez réessayer');
					}, function(evt){
					}).finally(function(){
						$scope.is_loading = '';
					});
				}

			};
	}]).controller('AccountsEditController',['$scope','Registers','Projects','$state','$stateParams','$window','userService','AccountService','roleAccountService','Upload', function($scope,Registers,Projects,$state,$stateParams,$window,userService,AccountService,roleAccountService,Upload){		
			var self  = this;
			self.is_changing_image = false;
			self.is_changing_image_avatar = false;
			$scope.user = {};
			// load account info
			AccountService.get($stateParams.user_id).then(function(resp){
				$scope.user = resp.data.user;
			}, function(err){
				toastr.error('Une erreur est survenue, veuillez réessayer');
			});

			roleAccountService.all().then(function(resp){
				$scope.roles = resp.data.roles;
			});

			$scope.delete_user_photo_candidate = function(){
				self.is_changing_image = false;
				$scope.user.user_photo_candidate = null;
			};

			$scope.delete_user_avatar_candidate = function(){
				self.is_changing_image_avatar = false;
				$scope.user.user_accounts[0].user_account_avatar_candidate = null;
			};

		
			$scope.update = function(profile){
				var r = confirm('Etes-vous sûre de vouloir modifier les informations de utilisateur?');
				if(r == true){
				$scope.is_loading = 'is-loading';

					if($scope.user.user_photo_candidate == null)
						delete $scope.user.user_photo_candidate;
					
					$scope.isloading = true;
					Upload.upload({
						url:'/accounts/edit',
						data:{'profile':profile}
					}).then(function(resp){
						toastr.success('modifications réalisées avec succès');
						$state.go('admins.accounts.view',{reload:true});
					}, function(err){
						toastr.error('Une erreur est survenue, veuillez réessayer');
					}, function(evt){

					}).finally(function(){
						$scope.is_loading = '';				
					});
				}
			};
	}]).controller('ProfilesEditController',['$scope','Registers','Projects','$state','$stateParams','$window','userService','AccountService','roleAccountService','Upload','profileService', function($scope,Registers,Projects,$state,$stateParams,$window,userService,AccountService,roleAccountService,Upload,profileService){		

			var self  = this;
			self.is_changing_image = false;
			$scope.profile = {};

			profileService.all().then(function(resp){
				$scope.profile = resp.data.profile;
			}, function(err){
				toastr.error('Une erreur est survenue, veuillez réessayer');
			});			

			roleAccountService.all().then(function(resp){
				$scope.roles = resp.data.roles;
			});

			$scope.delete_user_account_avatar_candidate = function(){
				self.is_changing_image = false;
				$scope.profile.user_account_avatar_candidate = null;
			};

			$scope.update = function(profile){
				var r = confirm('Etes-vous sûre de vouloir modifier vos informations de compte?');
				if(r == true){
					if($scope.profile.user_account_avatar_candidate == null)
						delete $scope.profile.user_account_avatar_candidate;
					$scope.isloading = true;
					Upload.upload({
						url:'/profiles/edit',
						data:{'profile':profile}
					}).then(function(resp){
						toastr.success('Profil modifié avec succès');
						$state.go("admins.dashboard",{reload:true})
					}, function(err){

					}, function(evt){

					}).finally(function(){
						$scope.isloading = false;
					});
				}
			};

	}]).directive('submitOn', function() {
    return {
        link: function(scope, elm, attrs) {
            scope.$on(attrs.submitOn, function() {
                setTimeout(function() {
                    elm.trigger('submit');
                });
            });
        }
    };
});
