<div>
	<h3 class="title">Création nouveau projet</h3>

	<form name="createProjectForm" ng-submit="create(project)">
		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Code Projet
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
						<textarea required ng-minlength="10" ng-maxlength="200" ng-model="project.project_meta.project_description" class="textarea" placeholder="Description Projet"></textarea>
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
					Business Unit
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left">
						    <div class="select" >
 							  <select ng-model="project.project_meta.project_bu" required ng-options="bu.name for bu in register.projects.dept_short">
						      </select>
						    </div>
						    <div class="icon is-small is-left">
						    	<i class="fa fa-building has-text-oci"></i>
						    </div>
					</div>
				</div>
			</div>
		</div>

		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Perimètre
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left">
						    <div class="select">
 							  <select ng-model="project.project_meta.project_bu_perimeter"   required ng-options="bu for bu in project.project_meta.project_bu.perimeters">
						      </select>
						    </div>
						    <div class="icon is-small is-left">
						    	<i class="fa fa-building has-text-oci"></i>
						    </div>
					</div>
				</div>
			</div>
		</div>

       <div class="field is-horizontal">
          <div class="field-label">
            <label for="" class="label has-text-left">Client Projet</label>
          </div>
          <div class="field-body">
			<div class="field" ng-class="hidden_customer_info_view">
				  <!-- Notification element - customer info -->
				  <article class="media">
					  <figure class="media-left is-mar-top-6">
					    <p class="image is-128x128">
					      <img ng-src="/img/assets/customers/logos/{{project.project_meta.project_customer.logo}}">
					    </p>
					  </figure>
					  <div class="media-content">
					    <div class="content">
					      <p>
					        <strong>{{project.project_meta.project_customer.name}}</strong>
					        <br>
					        {{project.project_meta.project_customer.description}}
					      </p>
					      <h2 class="is-size-6 has-text-weight-semibold">Pays</h2>
						  <div class="control has-icons-left">
								    <div class="select" >
		 							  <select ng-model="project.project_meta.project_customer.country" required ng-options="country as country for (country,cities) in register.countries_and_cities">
								      </select>
								    </div>
								    <div class="icon is-small is-left">
								    	<i class="fa fa-globe has-text-oci"></i>
								    </div>
						  </div>
					      <h2 class="is-size-6 has-text-weight-semibold">Région/Ville</h2>
						  <div class="control has-icons-left">
								    <div class="select">
		 							  <select ng-model="project.project_meta.project_customer.city" required ng-options="cities for (country,cities) in register.countries_and_cities[project.project_meta.project_customer.country]">
								      </select>
								    </div>
								    <div class="icon is-small is-left">
								    	<i class="fa fa-globe has-text-oci"></i>
								    </div>
						  </div>
						  <h2 class="is-size-6 has-text-weight-semibold">Adresse</h2>
					      <input required type="text" class="input is-uppercase has-text-weight-semibold" ng-model="project.project_meta.project_customer.full_adress" required>
 						  <h2 class="is-size-6 has-text-weight-semibold">Contact</h2>
					      <input required type="number" class="input is-uppercase has-text-weight-semibold" ng-model="project.project_meta.project_customer.full_contact" required>


					      <h2 class="is-size-6 has-text-weight-semibold">Chef de Projet</h2>
					      <input required type="text" class="input is-uppercase has-text-weight-semibold" ng-model="project.project_meta.project_customer.project_code_chief_fullname" required>

						  <h2 class="is-size-6 has-text-weight-semibold">Email</h2>
					      <input required type="email" class="input has-text-weight-semibold" ng-model="project.project_meta.project_customer.full_email" required>
					    </div>
					  </div>
					  <div class="media-right">
					    <button class="delete" ng-click="destroy_customer_info_view()"></button>
					  </div>
			     </article>
			</div>

            <div class="field" ng-class="hidden_customer_select_view">
            	  <!-- Dropdown select csutomer -->
                  <div class="dropdown is-hoverable" style="display: block !important;">
                    <div class="dropdown-trigger">
                       <div class="control is-expanded">
                          <input ng-model="vuln_filter_customer_project" type="text" style="width: 100%;" aria-haspopup="true" aria-controls="dropdown-menu">
                       </div>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu" role="menu" style="width: 100%;">
                      <div class="dropdown-content" style="height: 80px !important;overflow-y: scroll;">
                        <a href="#" ng-repeat="customer in register.projects.customers | filter: vuln_filter_customer_project" ng-click="select_customer(customer)" class="dropdown-item">
                          <span>{{customer.name}}</span>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>

		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					Status actuel du projet
				</label>
			</div>
			<div class="field-body">
				<div class="field">
					<div class="control has-icons-left">
						    <div class="select" >
 							  <select ng-model="project.project_accompaniments.content.accompaniments_meta.status" required ng-options="prior for prior in register.project_accompaniments.status">
						      </select>
						    </div>
						    <div class="icon is-small is-left">
						    	<i class="fas fa-exclamation has-text-oci"></i>
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

		<!-- Validation  -->
		<div class="field is-horizontal">
			<div class="field-label">
				&nbsp;
			</div>
			<div class="field-body">
					<div class="field is-grouped">
					  <p class="control">
					    <button class="button is-oci" type="submit" ng-disabled="createProjectForm.$invalid || is_loading">
					      Créer projet
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