<style>
	.modal-hover-tabs li:not(.is-active) a:hover{
		color: #d61a27 !important;
		background: black !important;
		transition-duration: 300ms;
		border-radius: 0px;
	}

	.modal-hover-tabs li.is-active a{
		color: #d61a27 !important;
		background: black !important;
		transition-duration: 300ms;
		border-radius: 0px;
	}

	.modal-hover-tabs li a{
		color: #fff !important;
		border-radius: 0px;
	}

	.custom_th{width: 20%;}

		  .cell_red{
		  	background: #c00000 !important;
		  	color: white !important;
		  	font-weight: bold;
		  }

		  .cell_yellow{
		  	background: #ffc000 !important;
		  	color: black;
		  	font-weight: bold;
		  }

		  .cell_green{
		  	background: #a8d08d !important;
		  	color: black;
		  	font-weight: bold;
		  }

		  .cell_blue{
		  	background: #8eaadb !important;
		  	color: black;
		  	font-weight: bold;
		  }

		  .cell_stripe_red{
		  	background: #c000002e !important;
		  }

		  .cell_stripe_green{
		  	background: #a8d08d42 !important;
		  }

		  .cell_stripe_yellow{
		  	background: #ffc00030 !important;
		  }

		  .cell_stripe_blue{
		  	background: #8eaadb63 !important;
		  }

		  .table-container{
		  	height: 400px;overflow-y: auto;
		  }
</style>
<div class="modal {{initial_audit_report_modal}}" style="font-size: 0.76rem;">
  <div class="modal-background"></div>
  <div class="modal-card" style="width:99%;height:99%;overflow: hidden;">
    <header class="eben-grey-b modal-card-head is-none-radius">
      <p class="modal-card-title has-text-black has-text-weight-semibold">Rapport Audit Initial - <span ng-bind="current_selected_project.project_name"></span> </p>
      <button class="delete" type="button" ng-click="initial_audit_report_modal_close()" aria-label="close"></button>
    </header>
    <section class="modal-card-body is-pad-top-0 is-pad-rgt-0 is-pad-lft-0" style="overflow-x: auto;overflow-y: hidden;">
	<div class="tabs is-centered is-boxed if-fullwidth eben-orange-b is-mar-bot-0">
	<?= $this->element("Projects/modal_show_details/audit_box/initial-audit-report-quick-view") ?>
	  <ul class="modal-hover-tabs">
		    <li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond1',1)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.1</span>
		      </a>
		    </li>
		    <li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond2',2)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.2</span>
		      </a>
		    </li>
		    <li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond3',3)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.3</span>
		      </a>
		    </li>
		    <li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond4',4)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.4</span>
		      </a>
		    </li>
		    <li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond5',5)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.5</span>
		      </a>
		    </li>
		    <li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond6',6)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.6</span>
		      </a>
		    </li>
		   	<li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond7',7)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.7</span>
		      </a>
		    </li>
		    <li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond8',8)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.8</span>
		      </a>
		    </li>
		   	<li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond9',9)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.9</span>
		      </a>
		    </li>
		   	<li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond10',10)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.10</span>
		      </a>
		    </li>
		   <li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond11',11)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.11</span>
		      </a>
		    </li>
		   	<li>
		      <a ng-click="workflow_tab_initial_audit_report_eval('cond12',12)">
		        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
		        <span>Ex.12</span>
		      </a>
		    </li>
	  </ul>
	</div>
	<!-- Form Wrapper -->
	<form submit-on="triggerEvent" name="initial_audi ng-click="show_initial_audit_report_quick_view(requirement.condition_id)"t_report" ng-submit="submit_report_audit_in ng-click="show_initial_audit_report_quick_view(requirement.condition_id)"itial(requirement)">
		<!-- TAbs Switch Area -->
		<div ng-switch on="workflow_tab_initial_audit_report">
			<div ng-switch-when="cond1">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  <tbody>
						  	<tr ng-if="requirement.parent_condition_id == 1" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </section>
			</div>
			<div ng-switch-when="cond2">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 2" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </section>
			</div>
			<div ng-switch-when="cond3">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 3" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span ng-click="show_initial_audit_report_quick_view(requirement.condition_id)" class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </section>
			</div>
			<div ng-switch-when="cond4">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 4" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span ng-click="show_initial_audit_report_quick_view(requirement.condition_id)" class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>			  	
		</tr>
						  </tbody>
						</table ng-click="show_initial_audit_report_quick_view(requirement.condition_id)">
						</div>
			      </article>
			    </section>
			</div>
			<div ng-switch-when="cond5">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 5" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </section>
			</div>
			<div ng-switch-when="cond6">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 6" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td> 
						  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </section>
			</div>
			<div ng-switch-when="cond7">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 7" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </section>
			</div>
			<div ng-switch-when="cond8">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 8" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span ng-click="show_initial_audit_report_quick_view(requirement.condition_id)" class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td> 
			 			  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </se ng-click="show_initial_audit_report_quick_view(requirement.condition_id)"ction>
			</div>
			<div ng-switch-when="cond9">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 9" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </section>
			</div>
			<div ng-switch-when="cond10">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 10" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </section>
			</div>
			<div ng-switch-when="cond11">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 11" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </section>
			</div>
			<div ng-switch-when="cond12">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
						<div class="table-container">
						<table class="table is-fullwidth is-hoverable">
						  <thead class="eben-grey-b">
						    <tr>
						      <th><abbr title="Position">Condition PCIDSS</abbr></th>
						      <th>Procédure de test</th>
						      <th><abbr title="Indique le statut de l'audit">Statut Audit</abbr></th>
						      <th><abbr title="Eventuels commentaires">Commentaires</abbr></th>
						      <th><abbr title="Indiquez le chantier associé à cette condition">Chantier</abbr></th>
						      <th><abbr title="Indiquez le statut du chantier">Statut Chantier</abbr></th>
						      <th><abbr title="Indiquez si les documents sont disponibles">Documents (Oui/Non)</abbr></th>
						    </tr>
						  </thead>
						  	<tr ng-if="requirement.parent_condition_id == 12" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			<span class="icon has-text-primary" ng-if="!requirement.procedure_is_child && requirement.condition_is_needed_solutions">
									  <i class="fa fa-window-restore"></i>
									</span>
						  			 {{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict,requirement.parent_condition_id)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
 						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
	  	 						<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	 	<td ng-if="requirement.procedure_is_testable == true">
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	 	<td ng-if="requirement.procedure_is_testable == false">
								   &nbsp;
						  	 	</td>
						  	</tr>
						  </tbody>
						</table>
						</div>
			      </article>
			    </section>
			</div>
		</div>
		<!-- End Tab Switch -->
	</form>
    </section>

    <footer class="modal-card-foot is-none-radius is-pad-top-10 is-pad-bot-10">
		      <button class="button is-eben" type="button" ng-click="triggerSubmit()">Valider</button>
			   <div class="stats-area is-mar-lft-300">
			   	  <p> <span class="has-text-weight-semibold">Conformité </span> <span ng-bind="stats_report_audit.conformity"></span> %</p>
			   	  <p> <span class="has-text-weight-semibold">En place <span ng-bind="stats_report_audit.in_place"></span></p>
			   	  <p> <span class="has-text-weight-semibold">Pas en place</span> <span ng-bind="stats_report_audit.not_in_place"></span></p>
			   	  <p> <span class="has-text-weight-semibold">N/A</span> <span ng-bind="stats_report_audit.not_applicable"></span></p>
			   	  <p> <span class="has-text-weight-semibold">Total</span> <span ng-bind="stats_report_audit.total"></span></p>
			   </div>
    </footer>
  </div>	
</div>



<script>
	$(document).ready(function(){
		$('.modal-hover-tabs li').on('click', function(){
			$('.modal-hover-tabs li').removeClass('is-active');
			$(this).addClass('is-active');
		});
	});
</script>


