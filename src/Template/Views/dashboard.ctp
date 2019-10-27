<h1 class="title is-pad-top-20">
	Salut <span ng-bind="profile.username"></span>
</h1>
<h2 class="subtitle is-6 has-text-grey">Bienvenue sur votre tableau de bord</h2>
<section>
	<div class="level">
		<div class="level-left">
			<div class="level-item">
				<span class="icon">
					<i class="fab fa-2x fa-dyalog"></i>
				</span>
				<span class="has-text-intercoton-green has-text-weight-semibold is-pad-lft-20 is-ft-sz-20">Dashboard KPI Tests Intrusions</span> 	
			</div>
		</div>
		<div class="level-right">
			<div class="level-item">
				<form ng-submit="load_kpis(interval_date)" name="stat_form">
					<div class="field is-horizontal">
						<div class="field-label">
							<label for="" class="label">
								Statistiques
							</label>
						</div>
						<div class="field-body">
							<div class="field">
								<h3>début</h3>
								<div class="control">
									<input type="date" required ng-model="interval_date.start_date">
								</div>
							</div>
							<div class="field">
								<h3>Fin</h3>
								<div class="control">
									<input type="date" required ng-model="interval_date.end_date">
								</div>
							</div>
						</div>
					</div>

					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field">
								<div class="select is-fullwidth" ng-init="interval_date.selected_dashboard_type = 'GRC'">
								  <select class="is-radiusless" ng-required ng-model="interval_date.selected_dashboard_type" ng-options="dashboard_type.name for dashboard_type in dashboard_types">
								  </select>
								</div>
							</div>
						</div>
					</div>

					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field">
								<button ng-disabled="stat_form.$invalid || is_loading" class="button is-eben is-fullwidth is-none-radius">
									<span class="icon">
									<i class="fas fa-search"></i>
									</span>
									&nbsp;
									Actualiser kpi
								</button> 
							</div>
						</div>
					</div>
				</form>	
			</div>
			<div>
										

			</div>
		</div>
	</div>

		<div class="tile is-ancestor">
			<div class="tile is-parent">
				<div class="tile is-child box hero">
					<canvas id="radar" class="chart chart-radar" chart-data="data"
					  chart-dataset-override="overrides_radar" chart-options="options" chart-labels="labels" chart-colors="colors_dashboard">
					</canvas> 
					  <div class="level">
					  	<div class="level-left">
					  		<div class="level-item">
					  			  <button class="button is-eben" ng-click="smp_radar_info='is-active'">
								    <span class="icon is-small">
								      <i class="fa fa-info-circle"></i>
								    </span>
								    <span>Plus d'informations</span>
								  </button>
					  		</div>
					  	</div>
					  </div>
					<div id="tooltip" style="position: absolute;"></div>
				</div>
			</div>
		</div>
		<!-- Followed projects stats -->
		<div class="tile is-ancestor">
			<div class="tile is-parent">
				<div class="tile is-child box hero is-none-radius is-pad-top-0 is-pad-rgt-0 is-pad-lft-0 is-pad-bot-0 ">
					<div class="media">
						<div class="media-left">
							<span class="icon">
								<i class="fas fa-retweet is-medium"></i>
							</span>
							 <span class=""></span>
						</div>
						<div class="media-content">
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Suivi Projet</p>
							
							<span class="is-pulled-left">Projets Suivis </span>  <span class="is-pulled-right is-pad-rgt-20 has-text-weight-semibold">{{global_kpis.project_counts}}</span><br>
							
							<span class="is-pulled-left">Projets en cours d'audit </span> <span class="is-pulled-right is-pad-rgt-20 has-text-weight-semibold">{{global_kpis.projects_audit_count}}</span> <br>

							<div class="is-divider" data-content="Détail Projets suivis"></div>				
	
							<span class="is-pulled-left">Projets Clotûré </span> <span class="is-pulled-right is-pad-rgt-20 has-text-weight-semibold">{{global_kpis.project_status["Clotûrés"]}}</span> <br>

							<span class="is-pulled-left">Projets Etude </span> <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_status.Etude}}</span> <br>
							
							<span class="is-pulled-left">Projets En Execution </span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">
						   	{{global_kpis.project_status.Execution}}
						   </span> 
						    
						    <br>
							
							<span class="is-pulled-left">Projets En Production </span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">	{{global_kpis.project_status.Production}}</span> 
							
							<br>
							<span class="is-pulled-left">Projets En Tests </span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_status.Tests}}</span> 
							
								<br>
							<span class="is-pulled-left">Projets Fin des tests </span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_status["Fin des tests"]}}</span> 
								<br>
							<span class="is-pulled-left">Projets Non démarré </span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_status["Non démarré"]}}</span> 
								<br>
							<span class="is-pulled-left">Projets Suspendus </span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_status.Suspendu}}</span> 
								<br>
							<span class="is-pulled-left">Projets Annulé </span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_status["Annulé"]}}</span> 
						</div>
					</div>
				</div>
			</div>

			<div class="tile is-parent">
				<div class="tile is-child box hero is-gamecenter-pink is-none-radius is-pad-top-0 is-pad-rgt-0 is-pad-lft-0 is-pad-bot-0 ">
					<div class="media">
						<div class="media-left">
							<span class="icon">
								<i class="fas fa-retweet is-medium"></i>
							</span>
							 <span class=""></span>
						</div>
						<div class="media-content">
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Détails Projets suivis</p>
							<canvas id="detail_followed_projects" class="chart chart-pie"
							  chart-data="detail_followed_projects" chart-colors="detail_followed_project_colors" chart-labels="detail_followed_project_labels" chart-options="pie_followed_chart_options">
							</canvas> 
						</div>
					</div>
				</div>
			</div>
     </div>

<div class="columns">
	<div class="column" style="height: 300px; overflow-y: auto;">
     			<div class="filter_area">
					<div class="field has-addons is-expanded">
						<div class="control is-expanded">
							<input type="text" class="input" ng-model="filter_keys" style="height:36px !important;">
						</div>
						<div class="control">
							<a class="button is-intercoton-green is-eben">
								<span class="icon">
									<i class="fa fa-search"></i>
								</span>
								<span>Rechercher</span>
							</a>
						</div>
					</div>
     			</div>
			<!-- Tabular view -->
			<table class="table is-hoverable is-striped is-fullwidth is-narrow is-mar-top-30">
							<thead>
								<tr class="eben-orange-b">
									<th class="has-text-white">#</th>
									<th class="has-text-white">Projet</th>
									<th class="has-text-white">Porteur</th>
									<th class="has-text-white">Priorité</th>
									<th class="has-text-white">Status</th>
									<th class="has-text-white">Spoc SBD</th>
									<th class="has-text-white">Période Audit</th>
									<th class="has-text-white">Période Vérifications</th>
									<th class="has-text-white">Délais de correction</th>
									<th class="has-text-white">Nbre de vérifications</th>
									<th class="has-text-white">Durée de correction à ce jour</th>
									<th class="has-text-white">Création</th>
									<th class="has-text-white">En savoir Plus</th>
								</tr>
							</thead>
							<tbody >
								<tr ng-repeat="project in global_kpis.projects | filter:filter_keys" ng-class="set_state_project_row(project.project_is_closed)" class="">
									<td>
									  {{$index+1}}
									</td>
									<td class="is-uppercase has-text-weight-semibold">{{project.project_name}}</td>
									<td>{{project.project_meta.project_carrier}}</td>
									<td>{{project.project_meta.project_priority}}</td>
									<td ng-if="project.project_is_closed == false" class="has-text-weight-semibold">{{project.project_accompaniments[0].accompaniments_meta.status}}</td>
									<td ng-if="project.project_is_closed == true" class="has-text-weight-semibold">Clotûré</td>
									<td class="has-text-weight-semibold">{{project.spoc}}</td>
									<td>
										{{project.report_stats.report_dates.begin_date | date:'dd/MM/yyyy' }} - {{project.report_stats.report_dates.end_date | date:'dd/MM/yyyy' }}
									</td>

									<td>
										{{project.report_stats.being_date_ver | date:'dd/MM/yyyy' }} - {{project.report_stats.end_ver_date | date:'dd/MM/yyyy' }}
									</td>
									<td class="has-text-weight-semibold">{{project.report_stats.delay_corrections}} jours ouvrés</td>

									<td>{{project.report_stats.audit_ver_report_count}}</td>
									<td>{{project.report_stats.corrections_until_today}} jours ouvrés</td>

									<td>{{project.created | date:'dd/MM/yyyy' }}</td>
									<td>
										<button class="button is-eben" ng-click="openViewModal(project,$index)">
											<span class="icon">
												<i class="fas fa-info"></i>
											</span>
										</button>
									</td>
								</tr>
							</tbody> 
			</table>
	</div>
</div>



		<!-- Today Stats Preview - Observator & system -->
		<div class="tile is-ancestor">
			<div class="tile is-parent">
				<div class="tile is-child box hero is-gamecenter-pink is-none-radius is-pad-top-0 is-pad-rgt-0 is-pad-lft-0 is-pad-bot-0 ">
					<div class="media">
						<div class="media-left">
							<span class="icon">
								<i class="fas fa-retweet is-medium"></i>
							</span>
							 <span class=""></span>
						</div>
						<div class="media-content">
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">SPOC SecByDesign - Projets suivis</p>

							<span class="is-pulled-left">Projets suivis</span>
							<span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_counts}}</span>
							 <br>
							<div class="is-divider" data-content="vue simple"></div>				

							<div ng-repeat="spoc in global_kpis.spocs">
							    <span class="is-pulled-left">{{spoc.auditor}}</span>
								<span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">
									{{spoc.project_followed}}
								</span>
								<br>
							</div>

							<div class="is-divider" data-content="vue graphique"></div>				

							<canvas id="doughnut-graphs" class="chart chart-doughnut"
								  chart-data="spoc_followed_simple_data" chart-colors="detail_followed_project_colors" chart-labels="spoc_followed_simple_labels" chart-options="pie_followed_chart_options">
							</canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="tile is-parent">
				<div class="tile is-child box hero is-gamecenter-pink is-none-radius is-pad-top-0 is-pad-rgt-0 is-pad-lft-0 is-pad-bot-0 ">
					<div class="media">
						<div class="media-left">
							<span class="icon">
								<i class="fas fa-retweet is-medium"></i>
							</span>
							 <span class=""></span>
						</div>
						<div class="media-content">
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Occupation SPOC SecByDesign</p>
							<canvas width="100%" height="100%" id="radar" class="chart chart-radar"
							  chart-series="data_series_radar" chart-colors="detail_followed_project_colors" chart-data="data_radar" chart-options="radar_spoc_chart_options" chart-labels="labels_radar">
							</canvas> 
						</div>
					</div>
				</div>
			</div>
     </div>




		<!-- Today Stats Preview - Observator & system -->
		<div class="tile is-ancestor">
			<div class="tile is-parent">
				<div class="tile is-pad-top-0 is-pad-bot-0 is-pad-lft-0 is-pad-rgt-0 is-child box hero is-none-radius is-transparent is-shadowless">
						<h2 class="has-text-grey mcen-lightgrey-b has-text-weight-semibold">Répartition risque/porteurs</h2>
					<table class="table is-fullwidth is-striped">
					  <thead>
					    <tr class="eben-orange-b">
					      <th class="has-text-white has-text-weight-semibold">#</th>
					      <th class="has-text-white has-text-weight-semibold">Porteur</th>
					      <th class="has-text-white has-text-weight-semibold">Nbre Projets suivis</th>
					      <th class="has-text-white has-text-weight-semibold">Risque Avant</th>
					      <th class="has-text-white has-text-weight-semibold">Risque Actuel</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr ng-repeat="carrier_stat in global_kpis.project_carriers_stats" ng-class="get_row_bg($index)">
					  		<td class="has-text-weight-semibold">{{$index+1}}</td>
					  		<td class="has-text-weight-semibold">{{carrier_stat.carrier}}</td>
					  		<td class="has-text-weight-semibold">{{carrier_stat.project_followed}}</td>
					  		<td class="has-text-weight-semibold">{{carrier_stat.risk_before}}</td>
					  		<td class="has-text-weight-semibold">{{carrier_stat.risk_actual}}</td>
					  	</tr>
					  </tbody>
					  <tfoot>
					  	<td colspan="3">Total</td>
					  	<td class="has-text-weight-semibold">{{global_kpis.project_carriers_stats_total.total_risk_before}}</td>
					  	<td class="has-text-weight-semibold">{{global_kpis.project_carriers_stats_total.total_risk_actual}}</td>
					  </tfoot>
					</table>
				</div>
			</div>
	     </div>

		<div class="tile is-ancestor">
			<div class="tile is-parent">
							<canvas id="line" class="chart chart-line" chart-data="data_repartition_lines"
							chart-labels="lines_risk_repartition_labels" chart-series="lines_risk_repartition_series" chart-options="lines_risk_repartition_options" chart-colors="lines_repartition_colors">
							</canvas>
			</div>

				<div class="tile is-parent is-shadowless is-none-border">
					<div class="is-pad-top-0 is-pad-bot-0 is-pad-lft-0 is-pad-rgt-0 tile is-child box hero is-transparent is-none-radius is-shadowless is-none-border">
							<h2 class="has-text-grey mcen-lightgrey-b has-text-weight-semibold">Répartition risque</h2>

							<canvas chart-colors="risk_repartition_colors" chart-options="risk_repartition_chart_options" id="base" class="chart-horizontal-bar" chart-data="risk_repartition_data" chart-labels="risk_repartition_labels">
							</canvas> 
							<!-- total_risk_actual -->
							<!-- total_risk_before -->
					</div>
				</div>
	     </div>





		<div class="tile is-ancestor">
			<div class="tile is-parent">
				<div class="tile is-pad-top-0 is-pad-bot-0 is-pad-lft-0 is-pad-rgt-0 is-child box hero is-none-radius is-transparent is-shadowless">
					<h2 class="has-text-grey mcen-lightgrey-b has-text-weight-semibold">Top Vulnerabilités/Surfaces</h2>
					<div class="columns is-multiline">
						<div class="column" ng-repeat="carto in global_kpis.vulns_carto">
							<article class="message" style="font-size: 0.8rem !important;">
							  <div class="message-header">
							    <p>{{carto.type}}</p>
							    <button class="delete" aria-label="delete"></button>
							  </div>
							  <div class="message-body">
									<table class="table is-fullwidth is-striped is-hoverable">
									  <thead>
									    <tr class="eben-orange-b">
									      <th class="has-text-white has-text-weight-semibold">#</th>
									      <th class="has-text-white has-text-weight-semibold">Vulnérabilité</th>
									      <th class="has-text-white has-text-weight-semibold">Récurrence</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<tr ng-repeat="vuln in carto.vulns" ng-if="$index<5 && vuln.encountered>0">
									  		<td class="has-text-weight-semibold">{{$index+1}}</td>
									  		<td class="has-text-weight-semibold">{{vuln.description}}</td>
									  		<td class="has-text-weight-semibold">{{vuln.encountered}}</td>
									  	</tr>
									  </tbody>
									</table>
							  </div>
							</article>
						</div>
					</div>
				</div>
			</div>
     </div>
<?= $this->element('Dashboard/modal_show_projects') ?>

<!-- SMP Dashboard  -->
<!-- SMP Radar info -->
<?= $this->element('Dashboard/SMP/info-radar') ?>

</section>



