<h1 class="title is-pad-top-20">
	Bonjour, Mr FALILU
</h1>
<h2 class="subtitle is-6 has-text-grey">Bienvenue sur votre tableau de bord</h2>

<section >
	<div class="level">
		<div class="level-left">
			<div class="level-item">
				<span class="icon">
					<i class="fab fa-2x fa-dyalog"></i>
				</span>
				<span class="has-text-intercoton-green has-text-weight-semibold is-pad-lft-20">Dashboard KPI Orange</span> 	
			</div>

		</div>
		<div class="level-right">
			<div class="level-item">
				<form ng-submit="refreshStats(collector)" name="stat_form">
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
									<input type="date" required ng-model="collector.start_date">
								</div>
							</div>
							<div class="field">
								<h3>Fin</h3>
								<div class="control">
									<input type="date" required ng-model="collector.end_date">
								</div>
							</div>
						</div>

					</div>

					<div class="field is-horizontal">
						<div class="field-label">
							<label for="" class="label">
								Validation
							</label>
						</div>
						<div class="field-body">
							<div class="field">
								<button ng-disabled="stat_form.$invalid || is_loading" class="button is-mcen-orange is-fullwidth is-none-radius">
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
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Chiffre d'affaire (KXOF HT)</p>
							<span class="is-pulled-left">CA Mobile Sortant </span>  <span class="is-pulled-right is-pad-rgt-20 has-text-weight-semibold">{{quickCa.mobile_ca | currency:"":3}}</span><br>
							<span class="is-pulled-left">CA Mobile Entrant (estimé) </span> <span class="is-pulled-right is-pad-rgt-20 has-text-weight-semibold">{{quickCa.mobile_ca_entrant | currency:"":3}}</span> <br>
							<span class="is-pulled-left">CA Fixe Broaband</span> <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20"> {{quickCa.montant_vente_fixe | currency:"":3}} </span> <br>
							<span class="is-pulled-left">CA OM </span>
						   <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20"> {{quickCa.ca_om | currency:"":3}}</span> 
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
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Traffic Mobile</p>
							<span class="is-pulled-left">Voix (entrant+sortant) </span> <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20"> {{quickTraffic.valeur_trafic_mobile_voix | number:3}} min</span> <br>
							<span class="is-pulled-left">SMS (sortant)</span> <span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20"> {{quickTraffic.valeur_trafic_mobile_sms | number:3}}</span> <br>
							<span class="is-pulled-left">Data</span>
							<span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20"> {{quickTraffic.valeur_trafic_mobile_data | number:3}} To</span>
						</div>
					</div>
				</div>
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
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Rechargement(KXOF HT)</p>
							<span class="is-pulled-left">Valeur totale</span>
							<span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20"> {{quickReload.valeur_total_rechargement | currency:"":3}}</span>
							 <br>
							<span class="is-pulled-left">parc rechargeur</span>
								<span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20"> {{quickReload.pourcentage_recharge_airtimes}}%</span>
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
							<p class="is-size-5 has-text-weight-semibold has-text-intercoton-green">Parc</p>
								<span class="is-pulled-left">Parc FT M-1 </span> 
								<span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20"> {{quickParc.nombre_abonnes_parc_ft|number:3}} abonnés {{quickParc.taux_parc_ft}}%</span>
							<br>
								<span class="is-pulled-left">Parc Actif Sortant: </span> 
								<span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20"> {{quickParc.nombre_abonnes_parc_actif | number:3}} abonnés {{quickParc.taux_parc_actif}}%</span>
							<br>
							<span class="is-pulled-left">OM Parc Actif: </span>
							<span class="is-pulled-right has-text-weight-semibold is-pad-rgt-20"> {{quickParc.nombre_abonnes_om_actif | number:3}} abonnés {{quickParc.taux_om_actif}}%</span>
						</div>
					</div>
				</div>
			</div>
     </div>




		<!-- Today Stats Preview - Observator & system -->
		<div class="tile is-ancestor">
			<div class="tile is-parent">
				<div class="tile is-pad-top-0 is-pad-bot-0 is-pad-lft-0 is-pad-rgt-0 is-child box hero is-none-radius is-transparent is-shadowless">
						<h2 class="has-text-grey mcen-lightgrey-b has-text-weight-semibold">Top service par CA</h2>
					<table class="table is-fullwidth">
					  <thead>
					    <tr class="mcen-orange-b">
					      <th class="has-text-white has-text-weight-semibold">Service</th>
					      <th class="has-text-white has-text-weight-semibold">Ca</th>
					      <th class="has-text-white has-text-weight-semibold">Ca HT</th>
					      <th class="has-text-white has-text-weight-semibold">Nb Transferts</th>
					      <th class="has-text-white has-text-weight-semibold">Total Transferts</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr ng-repeat="line in top_base_services_ca" ng-class="get_row_bg($index)">
					  		<td class="has-text-white has-text-weight-semibold">{{line.name}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.ca}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.ca_ht}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.nb_trans}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.trans_amount}}</td>
					  	</tr>
					  </tbody>
					</table>
				</div>
			</div>

			<div class="tile is-parent is-shadowless is-none-border">
				<div class="is-pad-top-0 is-pad-bot-0 is-pad-lft-0 is-pad-rgt-0 tile is-child box hero is-transparent is-none-radius is-shadowless is-none-border">
						<h2 class="has-text-grey mcen-lightgrey-b has-text-weight-semibold">Top service par Nb transferts</h2>
				    <table class="table is-fullwidth is-striped">
					  <thead>
					    <tr class="mcen-orange-b">
					      <th class="has-text-white has-text-weight-semibold">Service</th>
					      <th class="has-text-white has-text-weight-semibold">Ca</th>
					      <th class="has-text-white has-text-weight-semibold">Ca HT</th>
					      <th class="has-text-white has-text-weight-semibold">Nb Transferts</th>
					      <th class="has-text-white has-text-weight-semibold">Total Transferts</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr ng-repeat="line in top_base_services_trans" ng-class="get_row_bg($index)">
					  		<td class="has-text-white has-text-weight-semibold">{{line.name}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.ca}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.ca_ht}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.nb_trans}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.trans_amount}}</td>
					  	</tr>
					  </tbody>
					</table>
				</div>
			</div>
     </div>




	<div class="tile is-ancestor">
		<div class="tile is-parent">
			<div class="tile is-7 is-child box is-pad-full-0 is-none-radius">
				<div class="panel">
					<div class="panel-heading mcen-orange-b is-pad-rgt-0 is-pad-rgt-0">
						<div>
							<span class="icon">
								<i class="fas fa-2x fa-chart-area has-text-white"></i>
							</span>
							<span class="has-text-white has-text-weight-semibold is-pad-lft-20 is-size-6">Transactions Top 5 Franchise</span> 
						</div>
					</div>
					<div class="panel-block">
						<canvas  id="line" class="chart chart-pie" chart-data="data_pie_2"
						chart-labels="labels_pie_2" chart-options="options_pie_2">
						</canvas>
					</div>
				</div>

			</div>
			<div class="tile is-1 is-child">
				&nbsp;
			</div>
			<!-- Doughnout -->
			<div class="tile is-4 is-child box is-pad-full-0 is-none-radius">
				<div class="panel">
					<div class="panel-heading mcen-orange-b is-pad-rgt-0">
						<div>
							<span class="icon">
							<i class="fas fa-2x fa-thermometer-three-quarters has-text-white"></i>
							</span>
							<span class="has-text-white has-text-weight-semibold is-pad-lft-20 is-size-6">CA Top 5 Franchises</span> 	
						</div>
					</div>
					<div class="panel-block">
						<canvas id="doughnut" class="chart chart-bar"
						   chart-data="data_pie" chart-labels="labels_pie" width="100%" height="100%">
						</canvas> 
					</div>
				</div>

			</div>
		</div>
	</div>

		<div class="tile is-ancestor">
			<div class="tile is-parent">
				<div class="tile is-pad-top-0 is-pad-bot-0 is-pad-lft-0 is-pad-rgt-0 is-child box hero is-none-radius is-transparent is-shadowless">
						<h2 class="has-text-grey mcen-lightgrey-b has-text-weight-semibold">Tableau transactions/services</h2>
					<table class="table is-fullwidth">
					  <thead>
					    <tr class="mcen-orange-b">
					      <th class="has-text-white has-text-weight-semibold">Service</th>
					      <th class="has-text-white has-text-weight-semibold">Ca</th>
					      <th class="has-text-white has-text-weight-semibold">Ca HT</th>
					      <th class="has-text-white has-text-weight-semibold">Nb Transferts</th>
					      <th class="has-text-white has-text-weight-semibold">Total Transferts</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr ng-repeat="line in all_service_transactions.datas" ng-class="get_row_bg($index)">
					  		<td class="has-text-white has-text-weight-semibold">{{line.name}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.ca}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.ca_ht}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.nb_trans}}</td>
					  		<td class="has-text-white has-text-weight-semibold">{{line.trans_amount}}</td>
					  	</tr>
					  </tbody>
					  <tfoot>
					  	<td>
					  		Total
					  	</td>
					  	<td>
					  		{{all_service_transactions.total.ca}}
					  	</td>
					  	<td>
					  		{{all_service_transactions.total.ca_ht}}
					  	</td>
					  	<td>
					  		{{all_service_transactions.total.nb_trans}}
					  	</td>
					  	<td>
					  		{{all_service_transactions.total.trans_amount}}
					  	</td>
					  </tfoot>
					</table>
				</div>
			</div>
		</div>

	<!-- Page Loader -->
	<div class="pageloader is-left-to-right is-active is-gamecenter-blue" ng-show="is_loading" style="background:#110e39 url('/img/assets/image/minion_loading_stats.png') no-repeat 100% 100%;">
        <a class="navbar-item" href="#">
			<img src="/img/assets/logo/gamecenter.png" alt="Orange Security Projects" style="max-height: 100%;max-width:200px;">
		</a>
		<span class="title">Collecte des statistiques en cours</span>
	</div>
</section>



