<div>
	<h3 class="title">Modification Projet</h3>

	<form name="createProjectForm" ng-submit="edit(project)">
		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Nom du Projet
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left has-icons-right">
						<input required type="text" class="input is-uppercase has-text-weight-semibold" ng-model="project.project_name" required>
					</div>
				</div>
			</div>
		</div>

		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Description projet
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left has-icons-right">
						<textarea required ng-minlength="10" ng-maxlength="1000" ng-model="project.project_meta.project_description" class="textarea" placeholder="Description Projet"></textarea>
					</div>
				</div>
			</div>
		</div>

		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Période Projet (Année - Semestre)
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left has-icons-right">
						<div class="select">
							<select required ng-model="project.project_meta.project_year" ng-options="year for year in register.projects.years">
							</select>
					    </div>
						<div class="select">
							<select required ng-model="project.project_meta.project_semester" ng-options="semester for semester in register.projects.semesters">
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Priorité du projet
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left">
						    <div class="select" >
 							  <select ng-model="project.project_meta.project_priority"  ng-init="project.project_meta.project_priority=register.projects.priorities[0]" required ng-options="prior for prior in register.projects.priorities">
						      </select>
						    </div>
						    <div class="icon is-small is-left">
						    	<i class="fas fa-exclamation has-text-oci"></i>
						    </div>
					</div>
				</div>
			</div>
		</div>

		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Porteur projet
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left">
						    <div class="select" >
 							  <select ng-model="project.project_meta.project_carrier" required ng-options="prior for prior in register.projects.carriers">
						      </select>
						    </div>
						    <div class="icon is-small is-left">
						    	<i class="fas fa-exclamation has-text-oci"></i>
						    </div>
					</div>
				</div>
			</div>
		</div>

		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Client projet
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left">
						    <div class="select" >
 							  <select ng-model="project.project_meta.project_customer" required ng-options="prior for prior in register.projects.customers">
						      </select>
						    </div>
						    <div class="icon is-small is-left">
						    	<i class="fas fa-exclamation has-text-oci"></i>
						    </div>
					</div>
				</div>
			</div>
		</div>

		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Enjeux Strategiques
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left">
						    <div class="select">
						      <select required ng-model="project.project_meta.project_issue" ng-options="issues for issues in register.projects.issues">
						      </select>
						    </div>

						    <div class="icon is-small is-left">
						    	<i class="fas fa-binoculars has-text-oci"></i>
						    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Programme
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left">
						    <div class="select">
   								<select required ng-model="project.project_meta.progam" ng-options="issues for issues in register.projects.programs">
						      </select>
						    </div>

						    <div class="icon is-small is-left">
						    	<i class="fas fa-binoculars has-text-oci"></i>
						    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Gouvernance Projet
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control">
						<div class="select">
 								<select required ng-model="project.project_meta.project_governance_type" ng-options="gov for gov in register.projects.governances">
						      </select>
						</div>
					</div>
				</div>
			</div>
		</div>

					        <!-- Contacts du projet -->
							<div class="field is-horizontal" id="actor_area">
								<div class="field-label">
									<label for="" class="label">
										Equipe Projet
									</label>
								</div>

								<div class="field-body">
									<div class="field" >
										<button id="add_actor_trigger" ng-click="openActorModal()" type="button" class="button is-oci">
											<span class="icon">
												<i class="fas fa-plus"></i>
											</span>
											<span>Constitution</span>
										</button>
									</div>
								</div>
					         </div>

		
		<!-- project actors  -->
		<div class="field is-horizontal" ng-repeat="actor in actors" ng-if="actor.is_selected">
			<div class="field-label">
				<label>&nbsp;</label>
			</div>
			<div class="field-body">
				<div class="field" >
					 <div class="control">
					 		<input type="text" ng-model="actor.fullname" class="input" readonly>
					 </div>
				</div>
				<div class="field">
					<div class="control">
						<div class="select">
						    <select required ng-model="actor.role" ng-options="role for role in register.projects.team_roles"></select>
						</div>

					</div>
				</div>
				<div class="field">
					<div class="control">
						<button class="button is-danger is-outlined" ng-click="retireActorSheetObject(actor)">
							<span class="icon">
								<i class="fas fa-times"></i>
							</span>
							<span>Effacer</span>
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Indices projet -->
		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Indices Projet*
				</label>
			</div>
			<div class="field-body">

				<!-- is application connected internet? -->
				<div class="field">
					<h3 class="subtitle">Connectivité Internet</h3>
					<div class="control">
					  <label class="radio">
					    <input type="radio" required ng-value="true" ng-model="project.project_meta.indices.project_is_internet_connected" name="project_is_internet_connected">
					    Oui
					  </label>
					  <label class="radio">
					    <input type="radio" required ng-value="false" ng-model="project.project_meta.indices.project_is_internet_connected" name="project_is_internet_connected">
					    Non
					  </label>
					</div>
				</div>

				<!-- is application harmful data? -->
				<div class="field">
					<h3 class="subtitle">Utilisation de données sensibles?</h3>
					<div class="control">
					  <label class="radio">
					    <input type="radio" required ng-value="true"  ng-model="project.project_meta.indices.project_is_used_harmful_data" name="project_is_used_harmful_data">
					    Oui
					  </label>
					  <label class="radio">
					    <input type="radio" required ng-value="false" ng-model="project.project_meta.indices.project_is_used_harmful_data" name="project_is_used_harmful_data">
					    Non
					  </label>
					</div>
				</div>

				<!-- is application used third connexions? -->
				<div class="field">
					<h3 class="subtitle">Connexions Tierces</h3>
					<div class="control">
					  <label class="radio">
					    <input type="radio" required ng-value="true" ng-model="project.project_meta.indices.project_is_used_third_connexions" name="project_is_used_third_connexions">
					    Oui
					  </label>
					  <label class="radio">
					    <input type="radio" required ng-value="false" ng-model="project.project_meta.indices.project_is_used_third_connexions" name="project_is_used_third_connexions">
					    Non
					  </label>
					</div>
				</div>


			</div>
		</div>



		<!-- Indices projet Suite -->
		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					&nbsp;
				</label>
			</div>
			<div class="field-body">

				<!-- is application franchise exchanged? -->
				<div class="field">
					<h3 class="subtitle">Exposition Franchise</h3>
					<div class="control">
					  <label class="radio">
					    <input type="radio" required ng-value="true" ng-model="project.project_meta.indices.project_is_franchise_exposed" name="project_is_franchise_exposed">
					    Oui
					  </label>
					  <label class="radio">
					    <input type="radio" required ng-value="false" ng-model="project.project_meta.indices.project_is_franchise_exposed" name="project_is_franchise_exposed">
					    Non
					  </label>
					</div>
				</div>

				<!-- is service for OCI and subs? -->
				<div class="field">
					<h3 class="subtitle">Service OCI et filiales?</h3>
					<div class="control">
					  <label class="radio">
					    <input type="radio" required ng-value="true"  ng-model="project.project_meta.indices.project_is_for_oci_and_subs" name="project_is_for_oci_and_subs">
					    Oui
					  </label>
					  <label class="radio">
					    <input type="radio" required ng-value="false" ng-model="project.project_meta.indices.project_is_for_oci_and_subs" name="project_is_for_oci_and_subs">
					    Non
					  </label>
					</div>
				</div>

				<!-- is application used third connexions? -->
				<div class="field">
					<h3 class="subtitle">Centralisation de données client?</h3>
					<div class="control">
					  <label class="radio">
					    <input type="radio" required ng-value="true" ng-model="project.project_meta.indices.project_is_client_data_centralized" name="project_is_client_data_centralized">
					    Oui
					  </label>
					  <label class="radio">
					    <input type="radio" required ng-value="false" ng-model="project.project_meta.indices.project_is_client_data_centralized" name="project_is_client_data_centralized">
					    Non
					  </label>
					</div>
				</div>
			</div>
		</div>


		<!-- Validation  -->
		<div class="field is-horizontal">
			<div class="field-label">
				&nbsp;
			</div>
			<div class="field-body">
					<div class="field is-grouped">
					  <p class="control">
					    <button class="button is-oci" type="submit" ng-disabled="createProjectForm.$invalid || is_loading">
					      Modifier projet
					    </button>
					  </p>
					  <p class="control">
					    <button type="reset" ng-click="go_back()" class="button is-black">
					      Annuler
					    </button>
					  </p>
					</div>
			</div>
		</div>
	</form>
	<?= $this->element('Projects/modal_add_actor') ?>
</div>