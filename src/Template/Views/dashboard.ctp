<h1 class="title">
	Salut <span ng-bind="profile.username"></span>
</h1>
<h2 class="subtitle is-6 has-text-grey">Bienvenue sur votre tableau de bord</h2>
<section>
	<div class="level" style='background: url("/img/assets/stats.png") no-repeat 100% 23%;'>
		<div class="level-left box is-radiusless">
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
		</div>
		<div class="level-right">
			<div class="level-item">
			</div>
			<div>
										

			</div>
		</div>
	</div>

	<div class="columns is-pad-lft-10 is-pad-rgt-10">
		<div class="column is-9 box hero is-none-radius is-pad-top-0 is-pad-rgt-0 is-pad-lft-0 is-pad-bot-0 ">
					<canvas id="radar" class="chart chart-radar" chart-data="radar_datas"
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
		</div>
		<div class="column is-3 is-pad-top-0">
					<table class="table is-fullwidth is-striped">
					  <thead>
					    <tr class="eben-orange-b">
					      <th class="has-text-white has-text-weight-semibold">#</th>
					      <th class="has-text-white has-text-weight-semibold">&nbsp;</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr ng-repeat="customer in customers">
					  		<td class="has-text-weight-semibold">
								<figure class="image is-96x96">
								  <img ng-src="/img/assets/customers/logos/{{customer.logo}}">
								</figure>
					  		</td>
					  		<td class="has-text-weight-semibold is-uppercase">{{customer.name}} <br> {{customer.city}} - {{customer.country}} <br> {{customer.full_contact}}</td>
					  	</tr>
					  </tbody>
					</table>
		</div>
	</div>
	<div class="columns is-pad-lft-10 is-pad-rgt-10">
		<div class="column box is-pad-lft-0 is-pad-rgt-0 is-radiusless">
							<table class="table is-fullwidth is-striped">
								<thead>
									<tr>
										<th>&nbsp;</th>
									      <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 1</abbr></th>
										  <th><abbr title="Ne pas utiliser les mots de passe système et autres paramètres de sécurité par défaut définis par le fournisseur">Ex 2</abbr></th>
										  <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 3</abbr></th>
										  <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 4</abbr></th>
										  <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 5</abbr></th>
										  <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 6</abbr></th>
										  <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 7</abbr></th>
										  <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 8</abbr></th>
										  <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 9</abbr></th>
										  <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 10</abbr></th>
										  <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 11</abbr></th>
										  <th><abbr title="Installer et gérer une configuration de pare-feu pour protéger les données des titulaires de cartes">Ex 12</abbr></th>
										 <th>Global</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Conformité (%)</td>
										<td class="has-text-weight-semibold" ng-repeat="key in stats_report_audit_context.conformity">
											{{key.ex}} %
										</td>
										<td>
											{{stats_report_audit_context.global_conformity}}
										</td>
									</tr>
									<tr>
										<td>En place</td>
										<td class="has-text-weight-semibold"  ng-repeat="key in stats_report_audit_context.in_place">
											{{key.ex}}
										</td>
										<td>
											{{stats_report_audit_context.global_in_place}}
										</td>
									</tr>
									<tr>
										<td>Pas en place</td>
										<td  class="has-text-weight-semibold" ng-repeat="key in stats_report_audit_context.not_in_place">
											{{key.ex}}
										</td>
										<td>
											{{stats_report_audit_context.global_not_inplace}}
										</td>
									</tr>
									<tr>
										<td>N/A</td>
										<td class="has-text-weight-semibold" ng-repeat="key in stats_report_audit_context.not_applicable">
											{{key.ex}}
										</td>
										<td>
											{{stats_report_audit_context.global_not_applicable}}
										</td>
									</tr>
									<tr>
										<td>Total</td>
										<td class="has-text-weight-semibold" ng-repeat="key in stats_report_audit_context.total">
											{{key.ex}}
										</td>
										<td>
											{{stats_report_audit_context.global_total}}
										</td>
									</tr>
								</tbody>
							</table>
		</div>
	</div>

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
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Evolution des Risques</p>
								<canvas id="line" class="chart chart-line" chart-data="data_risk_evoled"
								chart-labels="labels_risk_evolved" chart-series="series_list_evolved">
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
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Evolution des Risques</p>
							  <canvas class="chart chart-bar"
								  chart-data="data_bar_risk_evolved_labels_datas" chart-labels="data_bar_risk_evolved_labels" chart-series="data_bar_risk_evolved_series"> 
							</canvas> 
						</div>
					</div>
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

							<span class="is-pulled-left">Audit Initial</span> <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_status.Etude}}</span> <br>
							
							<span class="is-pulled-left">Audit Observation</span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">
						   	{{global_kpis.project_status.Execution}}
						   </span> 
						    
						    <br>
							
							<span class="is-pulled-left">Aide à la remédiation</span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">	{{global_kpis.project_status.Production}}</span> 
							
							<br>
							<span class="is-pulled-left">Audit de surveillance</span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_status.Tests}}</span> 
							
								<br>
							<span class="is-pulled-left">Clotûré</span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_status["Fin des tests"]}}</span> 
								<br>
							<span class="is-pulled-left">Suspendu</span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">{{global_kpis.project_status["Non démarré"]}}</span> 
								<br>
							<span class="is-pulled-left">Annulé</span>
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
			</div>c
     </div>

<div class="columns">
	<div class="column" style="height: 300px; overflow-y: auto;">
     			<div class="filter_area">
					<div class="field has-addons is-expanded">
						<div class="control is-expanded">
							<input type="text" class="input" ng-model="filter_keys">
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
									<th class="has-text-white">BU</th>
									<th class="has-text-white">Périmètre</th>
									<th class="has-text-white">Status</th>
									<th class="has-text-white">Client</th>
									<th class="has-text-white">Derniers tests intrusions</th>
									<th class="has-text-white">Période Vérifications</th>
									<th class="has-text-white">Délais de correction</th>
									<th class="has-text-white">Nbre de vérifications</th>
									<th class="has-text-white">Durée de correction à ce jour</th>
									<th class="has-text-white">Création</th>
									<th class="has-text-white">En savoir Plus</th>
								</tr>
							</thead>
							<tbody >
								<tr ng-if="global_kpis.projects" ng-repeat="project in global_kpis.projects | filter:filter_keys" ng-class="set_state_project_row(project.project_is_closed)" class="">
									<td>
									  {{$index+1}}
									</td>
									<td class="is-uppercase has-text-weight-semibold">{{project.project_name}}</td>
									<td>{{project.project_meta.project_bu.name}}</td>
									<td>{{project.project_meta.project_bu_perimeter}}</td>
									<td ng-if="project.project_is_closed == false" class="has-text-weight-semibold">{{project.project_accompaniments[0].accompaniments_meta.status}}</td>
									<td ng-if="project.project_is_closed == true" class="has-text-weight-semibold">Clotûré</td>
									<td class="has-text-weight-semibold">{{project.project_meta.project_customer.name}}</td>
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
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Ressources - Projets suivis</p>

							<span class="is-pulled-left">Projets suivis</span>
							<span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20">61</span>
							 <br>
							<div class="is-divider" data-content="vue simple"></div>				

							<div ng-repeat="spoc in spocs">
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
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Charge de travail</p>
							<canvas width="100%" height="100%" id="radar" class="chart chart-radar"
							   chart-colors="detail_followed_project_colors" chart-data="data_radar_charge" chart-options="radar_spoc_chart_options_charge" chart-labels="labels_radar_charge" chart-dataset-override="overrides_radar_charge">
							</canvas> 
						</div>
					</div>
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
     	<?= $this->element('Dashboard/modal_show_details') ?>
<!-- SMP Dashboard  -->
<!-- SMP Radar info -->
<?= $this->element('Dashboard/SMP/info-radar') ?>


<div class="pageloader is-left-to-right {{is_loading}}" style="background:#d24040 url('/img/assets/image/minion_loading_stats.png') no-repeat 100% 100%;">
		<nav class="navbar is-pad-top-0 is-mar-top-0 is-transparent" role="navigation" aria-label="main navigation">
		  <div class="navbar-brand">
		    <a class="navbar-item" href="https://bulma.io">
		      <img src="/img/assets/skeleton/dp-logo.png" style="max-height: 2.2rem;">
		    </a>
		  </div>
		</nav>
        <a class="navbar-item" href="#">
			<img src="/img/assets/skeleton/d4f7ed6133d151c34f3c2025d118c2ec.gif" alt="DATAPROTECT SecView" style="max-height: 100%;">
		</a>
		<p>
			<span class="title has-text-white has-text-weight-semibold">Chargement en cours</span>
		</p>
</div>

</section>



