	<!-- Dropdown choice type audit report -->
	<div class="dropdown is-hoverable">
		  <div class="dropdown-trigger">
		    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
		    	<span class="has-text-weight-semibold">Menu</span>
		      <span class="icon is-small">
		        <i class="fa fa-bars" aria-hidden="true"></i>
		      </span>
		    </button>
		  </div>
		  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
		    <div class="dropdown-content">
		      <div class="dropdown-item">
		      	  <a href="#!" ng-click="initial_audit_report_modal_popup()">Gérer la conformité</a>
		      </div>
		    </div>
		  </div>
	</div>
	<div class="columns">
						<div class="column is-two-fifths">
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
										<td class="has-text-weight-semibold" ng-repeat="key in whole_stats_report_audit.conformity">
											{{key.ex}} %
										</td>
										<td>
											{{whole_stats_report_audit.global_conformity}}
										</td>
									</tr>
									<tr>
										<td>En place</td>
										<td class="has-text-weight-semibold"  ng-repeat="key in whole_stats_report_audit.in_place">
											{{key.ex}}
										</td>
										<td>
											{{whole_stats_report_audit.global_in_place}}
										</td>
									</tr>
									<tr>
										<td>Pas en place</td>
										<td  class="has-text-weight-semibold" ng-repeat="key in whole_stats_report_audit.not_in_place">
											{{key.ex}}
										</td>
										<td>
											{{whole_stats_report_audit.global_not_inplace}}
										</td>
									</tr>
									<tr>
										<td>N/A</td>
										<td class="has-text-weight-semibold" ng-repeat="key in whole_stats_report_audit.not_applicable">
											{{key.ex}}
										</td>
										<td>
											{{whole_stats_report_audit.global_not_applicable}}
										</td>
									</tr>
									<tr>
										<td>Total</td>
										<td class="has-text-weight-semibold" ng-repeat="key in whole_stats_report_audit.total">
											{{key.ex}}
										</td>
										<td>
											{{whole_stats_report_audit.global_total}}
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="column is-three-fifths">
							<canvas id="audit_radar" class="chart chart-radar"
							  chart-data="data_audit_radar" chart-options="options_audit_radar" chart-labels="data_audit_labels" chart-colors="audit_radar_colors">
							</canvas>
						</div>
	</div>
	<!-- Modal add new initial audit report -->
<?= $this->element("Projects/modal_show_details/audit_box/initial-audit-report") ?>