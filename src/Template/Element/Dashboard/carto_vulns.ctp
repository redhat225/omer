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
					<div class="field is-horizontal">
					  <div class="field-label is-normal">
					    <label class="label">Dates</label>
					  </div>
					  <div class="field-body">
					    <div class="field">
					    	<span class="has-text-weight-semibold">Date Création: <span>{{current_selected_project.current_selected_vuln_report.created | date:'dd/MM/yyyy HH:mm'}}</span>
					    	</span>
					    </div>
					    <div class="field">
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
								<input type="text" placeholder="Titre du rapport" ng-model="alt_vuln.vulnerability_report_denomination" class="input is-fullwidth" required ng-maxlength="200" ng-minlength="10">
					      </div>
					    </div>
					  </div>
					</div>

				</form>
        	</div>
        </div>

		<table class="table is-striped is-fullwidth">
			<thead>
				<tr>
					<th>Type</th>
					<th>Description</th>
					<th>RiskRating</th>
					<th>Recommandation</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="vuln in current_selected_project.tmp_vulnerabilities track by $index">
					<td>{{vuln.type}}</td>
					<td>{{vuln.description}}</td>
					<td>
						{{vuln.riskrating}}
					</td>
					<td class="has-text-centered">
						<span class="icon tooltip is-tooltip-multiline is-tooltip-oci is-tooltip-left" data-tooltip="{{vuln.recommandation}}">
							<i class="fas fa-info-circle has-text-oci"></i>
						</span>
					</td>
				</tr>
			</tbody>
</table>