		<style>
		  .red_select{
		  	background: #c00000 !important;
		  	color: white !important;
		  	font-weight: bold;
		  }

		  .red_yellow{
		  	background: #ffc000 !important;
		  	color: black;
		  	font-weight: bold;
		  }

		  .red_green{
		  	background: #a8d08d !important;
		  	color: black;
		  	font-weight: bold;
		  }

		  .red_blue{
		  	background: #8eaadb !important;
		  	color: black;
		  	font-weight: bold;
		  }

		</style>
		<div class="dropdown is-hoverable">
		  <div class="dropdown-trigger">
		    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
		      <span class="icon is-small">
		        <i class="fa fa-bars" aria-hidden="true"></i>
		      </span>
		    </button>
		  </div>
		  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
		    <div class="dropdown-content">
		      <div class="dropdown-item">
		      	  <a href="/sheet/corrections/{{current_selected_project.tmp_vulnerabilities_id}}.pdf" target="_blank">Exportation PDF</a>
		      </div>
		    </div>
		  </div>
	</div>

<div class="columns">
			<div class="column">
				<canvas  id="pie_vuln_chart" class="chart chart-pie"
				  chart-data="data_pie_vuln" chart-options="pie_default_chart_options" chart_colors="colors_pie" chart-labels="data_pie_labels" chart-colors="colors_pie">
				</canvas> 
			</div>
			<div class="column">
				<canvas id="bar_vuln_chart" class="chart chart-bar"
				  chart-data="data_bars_vuln" chart-options="bar_default_chart_options" chart_colors="colors_pie" chart-labels="data_bars_labels" chart-series="series_bars">
				</canvas>
			</div>
</div>
<div class="columns">
	<div class="column">
					<div class="field is-horizontal">
					  <div class="field-label is-normal">
					    <label class="label">Recherche Rapport</label>
					  </div>
					  <div class="field-body">
					    <div class="field">
					      <div class="control">
					      	    <div class="select">
									<select required ng-change="update_current_selected_vuln_report(vuln_report_id)" ng-init="vuln_report_id = current_selected_project.current_selected_vuln_report.id" ng-model="vuln_report_id" ng-options="vuln.id as vuln.vulnerability_report_denomination for vuln in current_selected_project.project_vulnerabilities">
									</select>
							    </div>
					      </div>
					    </div>
					  </div>
					</div>

	</div>
</div>
        <div class="columns">
        	<div class="column is-centered">
				<form ng-submit="update_project_vulnerabilities(alt_vuln)" name="updateFormVulns">

					<div class="field is-horizontal">
					  <div class="field-label is-normal">
					    <label class="label">Création</label>
					  </div>
					  <div class="field-body">
					    <div class="field">
							<div class="field">
							  <input id="switchColorSuccess" type="checkbox" name="switchColorSuccess" class="switch" ng-model="alt_vuln.issue">
							  <label for="switchColorSuccess"></label>
							</div>
					    </div>
					    <div class="field" ng-if="alt_vuln.issue===false">
					    	<span class="has-text-weight-semibold">Date Création: <span>{{current_selected_project.current_selected_vuln_report.created | date:'dd/MM/yyyy HH:mm'}}</span>
					    	</span>
					    </div>
					    <div class="field" ng-if="alt_vuln.issue===false">
							<span class="has-text-weight-semibold">Dernière Modification: <span>{{current_selected_project.current_selected_vuln_report.modified | date:'dd/MM/yyyy HH:mm'}}</span>
						    </span>
					    </div>
					  </div>
					</div>
					<div class="field is-horizontal">
					  <div class="field-label is-normal">
					    <label class="label">Période audit</label>
					  </div>
					  <div class="field-body">
					    <div class="field">
					      <p class="control">
					        <input class="input" type="date" value="{{alt_vuln.begin_date | date:'yyyy-MM-dd'}}" ng-model="alt_vuln.begin_date" required>
					      </p>
					    </div>
					    <div class="field">
					      <p class="control">
					        <input class="input" type="date" value="{{alt_vuln.end_date | date:'yyyy-MM-dd'}}" ng-model="alt_vuln.end_date" required>
					      </p>
					    </div>
					  </div>
					</div>
					<div class="field is-horizontal">
					  <div class="field-label is-normal">
					    <label class="label">Dénomination</label>
					  </div>
					  <div class="field-body">
					    <div class="field">
					      <div class="control">
								<input type="text" placeholder="Titre du rapport" ng-model="alt_vuln.vulnerability_report_denomination" class="input is-fullwidth" required ng-maxlength="200">
					      </div>
					    </div>
					    <div class="field">
					    	<div class="control">
								<button class="button is-eben" ng-disabled="updateFormVulns.$invalid">
									Soumettre
								</button>
					    	</div>
					    </div>
					  </div>
					</div>

				</form>
        	</div>
        </div>
        <div class="columns">
        	<div class="column">

        <div class="field is-horizontal">
          <div class="field-label">
            <label for="" class="label has-text-left">Recherche Vulnérabilité</label>
          </div>
          <div class="field-body">
            <div class="field">
                  <div class="dropdown is-hoverable" style="display: block !important;">
                    <div class="dropdown-trigger">
                       <div class="control is-expanded">
                          <input ng-model="vuln_filter" type="text" style="width: 100%;" aria-haspopup="true" aria-controls="dropdown-menu">
                       </div>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu" role="menu" style="width: 100%;">
                      <div class="dropdown-content" style="height: 80px !important;overflow-y: scroll;">
                        <a href="#" ng-repeat="vuln in register.project_deliverables.reports.vulnerabilities | filter: vuln_filter" ng-click="add_vuln(vuln)" class="dropdown-item">
                          <span>{{vuln.description}}</span>
                           <span class="icon has-text-oci tooltip is-tooltip-oci is-tooltip-multiline is-tooltip-right" data-tooltip="{{vuln.resume}}">
                             <i class="fas fa-info-circle"></i>
                           </span>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
        	</div>
        </div>

		<table class="table is-striped is-fullwidth">
			<thead>
				<tr>
					<th>Type</th>
					<th>Scope</th>
					<th>RiskRating</th>
					<th>Description</th>
					<th>Résumé/Scope/Recommandation</th>
					<th>Effacer</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="vuln in current_selected_project.tmp_vulnerabilities track by $index">
					<td>{{vuln.type}}</td>
					<td>
						<div class="field">
						  <div class="control">
						    <textarea  ng-model="vuln.scope" required class="textarea" placeholder="Scope: ex: 192.168.1.1"></textarea>
						  </div>
						</div>
					</td>
					<td>{{vuln.description}}</td>
					<td>
						<div class="control has-icons-left">
							<div class="select">
								<!-- #c00000 red -->
								<!-- #ffc000  yellow-->
								<!-- #a8d08d  green-->
								<!-- #8eaadb blue-->
								<select ng-class="determine_risk_color(vuln.riskrating)" ng-change="evalute_risk(vuln.type,vuln.riskrating,'change','{{vuln.riskrating}}')" ng-model="vuln.riskrating" ng-options="risk.rating as risk.literal_rating for risk in register.project_deliverables.reports.severities">
								</select>
							</div>
							<span class="icon is-left">
								<i class="fas fa-shield-alt"></i>
							</span>
						</div>
					</td>
					<td class="has-text-centered">
						<button class="button is-eben" ng-click="edit_recommandation($index,vuln.resume,vuln.recommandation)" data-show="quickview" data-target="quickviewDefault">Editer cette section</button>
					</td>
					<td>
						<span class="icon is-hoverable" ng-click="remove_vuln(vuln,$index)">
							<i class="fas fa-times-circle has-text-black"></i>
						</span>
					</td>
				</tr>
			</tbody>
</table>

<?= $this->element("Projects/elements/edit_recommandation") ?>