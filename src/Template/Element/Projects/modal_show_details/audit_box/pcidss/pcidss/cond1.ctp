			<div ng-switch-when="cond1">
			    <section class="modal-card-body" style="padding: 0px;">
			      <article>
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
						  <tfoot>
						    <tr>
						      <th><abbr title="Position">Conformité (%)</abbr></th>
						      <th>x%</th>
						    </tr>
						    <tr>
						      <th><abbr title="Position">En Place</abbr></th>
						      <th>y</th>
						    </tr>
						    <tr>
						      <th><abbr title="Position">Pas en Place</abbr></th>
						      <th>z</th>
						    </tr>
						    <tr>
						      <th><abbr title="Position">Sous Total</abbr></th>
						      <th>xyz</th>
						    </tr>
						  </tfoot>
						  <tbody>
						  	<tr ng-if="requirement.parent_condition_id == 1" ng-repeat="requirement in pcidssv321" ng-class="requirement.color_cell_stripe" class="">
						  		<!-- Start Manage cell - Condition PCIDSS -->
						  		<th class="narrow_cell" ng-if="!requirement.procedure_is_child">
						  			{{requirement.condition_id}} {{requirement.condition_label}}
						  		</th>
								<th class="narrow_cell" ng-if="requirement.procedure_is_child">
						  			&nbsp;
						  		</th>
						  		<!-- End -->
						  		<th class="narrow_cell">
						  			{{requirement.procedure_id}} {{requirement.procedure_label}}
						  		</th>
						  	 	<td>
								   <div class="control">
										<div class="select is-small">
											<select required ng-class="determine_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-change="requirement.color_cell_stripe=eval_audit_verdict_color_initial_report(requirement.procedure_verdict)" ng-model="requirement.procedure_verdict" ng-options="audit_verdict for audit_verdict in register.projects.audits.verdict_states">
											</select>
										</div>
									</div>
						  	 	</td>
 						  	 	<td>
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.procedure_comments" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td>
									<div class="field">
									  <div class="control">
									    <textarea class="textarea is-small" ng-model="requirement.associated_site" placeholder="Small textarea"></textarea>
									  </div>
									</div>
						  	 	</td>
						  	 	<td>
								   <div class="control">
										<div class="select is-small">
											<select required ng-model="requirement.doc_state"  ng-options="doc_state for doc_state in register.projects.audits.doc_states">
											</select>
										</div>
									</div>
						  	 	</td>
						  	 	<td>
								   <div class="control">
										<div class="select is-small">
											<select required  ng-model="requirement.site_state" ng-options="site_state for site_state in register.projects.audits.site_states">
											</select>

										</div>
									</div>
						  	 	</td> 
						  	</tr>
						  </tbody>
						</table>
			      </article>
			    </section>
			</div>