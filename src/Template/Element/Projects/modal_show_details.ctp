<style>
	.modal-hover-tabs li:not(.is-active) a:hover{
		color: #f85800 !important;
		background: black !important;
		transition-duration: 300ms;
	}

	.modal-hover-tabs li.is-active a{
		color: #f85800 !important;
		background: black !important;
		transition-duration: 300ms;
	}

	.modal-hover-tabs li a{
		color: #fff !important;
	}
</style>

<div class="modal {{showInfoProjectModal}}" id="show_workflow_modal">
  <div class="modal-background"></div>
  <div class="modal-card" style="width:99%; height: 99%;">
    <header class="modal-card-head is-none-radius">
      <p class="modal-card-title has-text-black has-text-weight-semibold">Informations Projet - <span ng-bind="current_selected_project.project_name"></span> </p>
      <button class="delete" type="button" ng-click="closeInfoModal()" aria-label="close"></button>
    </header>
    <section class="modal-card-body is-pad-top-0 is-pad-rgt-0 is-pad-lft-0" style="overflow-x: hidden;">
	<div class="tabs is-centered is-boxed if-fullwidth eben-orange-b">
	  <ul class="modal-hover-tabs">
	    <li class="is-active">
	      <a ng-click="workflow_tab = 'history'">
	        <span class="icon is-small"><i class="fa fa-info"></i></span>
	        <span>Details</span>
	      </a>
	    </li>
	    <li class="">
	      <a ng-click="workflow_tab = 'audit'">
	        <span class="icon is-small"><i class="fa fa-search"></i></span>
	        <span>Audit</span>
	      </a>
	    </li>
	    <li>
	      <a ng-click="workflow_tab = 'carto'">
	        <span class="icon is-small"><i class="fa fa-map"></i></span>
	        <span>Cartographie Vulnérabilités</span>
	      </a>
	    </li>	    
	    <li>
	      <a ng-click="workflow_tab = 'comments'">
	        <span class="icon is-small"><i class="fa fa-calendar"></i></span>
	        <span>Planning</span>
	      </a>
	    </li>
	    <li>
	      <a ng-click="workflow_tab = 'history_details'">
	        <span class="icon is-small"><i class="fa fa-history"></i></span>
	        <span>Historique</span>
	      </a>
	    </li>
	    <li>
	      <a ng-click="workflow_tab = 'docs'">
	        <span class="icon is-small"><i class="fa fa-archive"></i></span>
	        <span>Livrables</span>
	      </a>
	    </li>
	  </ul>
	</div>
	<!-- TAbs Switch Area --> 
	<!-- current_selected_project -->
	<div ng-switch on="workflow_tab">
		<div ng-switch-when="history">
		    <section class="modal-card-body">
					<div class="field is-horizontal">
						<div class="field-label">
							<label for="" class="label">
								Code Projet
							</label>
						</div>
						<div class="field-body">
							<div class="field">
								<div class="">
										<span class="has-text-weight-semibold">{{current_selected_project.project_name}}</span>
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
											<strong>{{current_selected_project.project_accompaniments[0].accompaniments_meta.status}}</strong>
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
								<div class="">
									<span class="has-text-weight-semibold">{{current_selected_project.project_meta.project_description}}</span>
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
									<span class="has-text-weight-semibold">{{current_selected_project.project_meta.project_year}}</span>
									<span class="has-text-weight-semibold">{{current_selected_project.project_meta.project_semester}}</span>
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
								<div class="">
									<span class="has-text-weight-semibold">{{current_selected_project.project_meta.project_bu.name}}</span>
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
									<span class="has-text-weight-semibold">{{current_selected_project.project_meta.project_bu_perimeter}}</span>
								</div>
							</div>
						</div>
					</div>

			       <div class="field is-horizontal">
			          <div class="field-body">
							<div class="field">
								  <!-- Notification element - customer info -->
								  <article class="media">
									  <figure class="media-left is-mar-top-6">
									    <p class="image is-128x128">
											      <img ng-src="/img/assets/customers/logos/{{current_selected_project.project_meta.project_customer.logo}}">
											    </p>
											  </figure>
											  <div class="media-content">
											    <div class="content">
											      <p>
											        <strong>{{current_selected_project.project_meta.project_customer.name}}</strong>
											        <br>
											        {{current_selected_project.project_meta.project_customer.description}}
											      </p>
											      <h2 class="is-size-6 has-text-weight-semibold">Pays</h2>
												  <div class="control has-icons-left">
														{{current_selected_project.project_meta.project_customer.country}}	
												  </div>
												  <h2 class="is-size-6 has-text-weight-semibold">Adresse</h2>
												  <strong><em>{{current_selected_project.project_meta.project_customer.full_adress}}</em></strong>
						 						  <h2 class="is-size-6 has-text-weight-semibold">Contact</h2>
												  <strong>{{current_selected_project.project_meta.project_customer.full_contact}}</strong>
											      <h2 class="is-size-6 has-text-weight-semibold">Chef de Projet</h2>
											      <strong>{{current_selected_project.project_meta.project_customer.project_code_chief_fullname}}</strong>

												  <h2 class="is-size-6 has-text-weight-semibold">Email</h2>
											     <strong>{{current_selected_project.project_meta.project_customer.full_email}}</strong>
											    </div>
											  </div>
									     </article>
							</div>
					   </div>
					</div>
					 <!-- project actors  -->
					<div class="field is-horizontal">
								<div class="field-label">
									<label>Equipe Projet (Dataprotect)</label>
								</div>
								<div class="field-body" >
									<div class="field">
										 <div class="" ng-repeat="contributor in current_selected_project.project_meta.contributors">
										 	<strong>{{contributor.role}}</strong> - 
										 	<strong>{{contributor.fullname}}</strong> 
										 </div>
									</div>
								</div>
							</div>
					    </section>
					</div>
					<div ng-switch-when="audit">
						<?= $this->element("Projects/modal_show_details/audit_box") ?>
					</div>
					<div ng-switch-when="comments">
						<form ng-submit="update_project_planning(current_selected_project.project_plannings[0].planning_meta)" name="planning_form">
 							<div class="steps">
							  <div class="step-item is-eben">
							    <div class="step-marker">
									T-1
							    </div>
							    <div class="step-details">
							      <p class="step-title">Etude</p>
							      <p>
							      	<input type="date" ng-model="current_selected_project.project_plannings[0].planning_meta.t_1_date" value="{{current_selected_project.project_plannings[0].planning_meta.t_1_date | date:'yyyy-MM-dd'}}">
							      </p>
							    </div>
							  </div>
							  <div class="step-item">
							    <div class="step-marker">T1</div>
							    <div class="step-details">
							      <p class="step-title">Revue Architecture</p>
							      <p>
							      	<input type="date" ng-model="current_selected_project.project_plannings[0].planning_meta.t1_date" value="{{current_selected_project.project_plannings[0].planning_meta.t1_date | date:'yyyy-MM-dd'}}">
							      </p>
							    </div>
							  </div>
							  <div class="step-item">
							    <div class="step-marker">T3</div>
							    <div class="step-details">
							      <p class="step-title">Mise en Production</p>
							      <p>
			     					<input type="date" ng-model="current_selected_project.project_plannings[0].planning_meta.t3_date" value="{{current_selected_project.project_plannings[0].planning_meta.t3_date | date:'yyyy-MM-dd'}}">
							      </p>
							    </div>
							  </div>

							  <div class="step-item">
							    <div class="step-marker">T3C</div>
							    <div class="step-details">
							      <p class="step-title">Clotûre Technique</p>
							      <p>
									<input type="date" ng-model="current_selected_project.project_plannings[0].planning_meta.t3c_date" value="{{current_selected_project.project_plannings[0].planning_meta.t3c_date | date:'yyyy-MM-dd'}}">
							      </p>
							    </div>
							  </div>
							</div>
							<div class="columns">
								<div class="column has-text-centered is-centered">
									<button class="button is-eben">Modifier</button>
								</div>
							</div> 
						</form>
					</div>
					<div ng-switch-when="history_details">
							<div class="columns is-pad-lft-20 is-pad-rgt-20">
								<div class="column is-two-thirds" style="overflow: scroll;height: 500px;">
									<div class="timeline is-centered">
									  <header class="timeline-header">
									    <span class="tag is-medium is-eben">Fin</span>
									  </header>
									  <div class="timeline-item" ng-class="render_accompaniment(accompaniment,'type')" ng-repeat="accompaniment in current_selected_project.project_accompaniments">
									    <div data-tooltip="Cliquez pour modifier" ng-click="edit_accompaniment(accompaniment)" class="timeline-marker tooltip is-icon" ng-class="render_accompaniment(accompaniment,'marker')">
									      <i class="fa" ng-class="render_accompaniment(accompaniment,'icon')"></i>
									    </div>
									    <div class="timeline-content">
									      <p class="heading date-header">{{accompaniment.created | date:'d MMM yy'}} <span ng-if="accompaniment.created!=accompaniment.modified">({{accompaniment.modified | date:'d MMM yy'}})</span> - {{accompaniment.accompaniments_meta.status}}</p>
									      <p>{{accompaniment.accompaniments_meta.message}}</p>
									      <p><span class="has-text-weight-semibold">@{{accompaniment.user_account.username}}</span></p>
									    </div>
									  </div>
									  <header class="timeline-header">
									    <span class="tag is-medium is-eben">Début</span>
									  </header>
									</div>
								</div>
								<div class="column is-one-third" style="border-left:1px solid lightgray;">
									<form ng-submit="send_accompaniement(project_accompaniment)" name="accompaniment_form">
										<h2 class="subtitle" ng-if="project_accompaniment.existing==false">
											Création
										</h2>
										<h2 class="subtitle" ng-if="project_accompaniment.existing==true">
											Modification
										</h2>
										<div class="field is-horizontal">
										  <div class="field-label is-normal">
										    <label class="label">Status</label>
										  </div>
										  <div class="field-body">
										    <div class="field">
										      <p class="control">
										      	<div class="select">
													<select required ng-model="project_accompaniment.accompaniments_meta.status" ng-options="status for status in register.project_accompaniments.status">
													 </select>
										      	</div>
										      </p>
										    </div>
										  </div>
										</div>
										<div class="field is-pad-lft-5 is-horizontal">
										  <div class="field-label is-normal">
										    <label class="label">Type</label>
										  </div>
										  <div class="field-body">
										    <div class="field">
										      <p class="control">
												<div class="select">
													<select required ng-model="project_accompaniment.accompaniments_meta.type" ng-options="type for type in register.project_accompaniments.types">
													</select>
											    </div>
										      </p>
										    </div>
										  </div>
										</div>
										<div class="field is-horizontal">
										  <div class="field-label is-mar-rgt-10 is-normal">
										    <label class="label">Message</label>
										  </div>
										  <div class="field-body">
										    <div class="field">
										      <p class="control">
												<textarea class="textarea" required ng-minlength="10" ng-maxlength="40" ng-model="project_accompaniment.accompaniments_meta.message" placeholder="e.g. Hello world"></textarea>
										      </p>
										    </div>
										  </div>
										</div>
										<!-- submit form -->
										<div class="field is-horizontal">
										  <div class="field-label is-normal">
										    <label class="label">&nbsp;</label>
										  </div>
										  <div class="field-body">
										    <div class="field is-pad-lft-5">
										      <p class="control" ng-click="project_accompaniment.existing = false" ng-if="project_accompaniment.existing==true">
												<button ng-click="destroy_accompaniment()" class="button is-grey is-fullwidth" ng-disabled="accompaniment_form.$invalid || accompaniment_is_loading">
													Revenir création
												</button>
										      </p>
										      <p class="control has-pad-top-10">
												<button class="button is-eben is-fullwidth" ng-disabled="accompaniment_form.$invalid || accompaniment_is_loading">
													Soumettre
												</button>
										      </p>
										    </div>
										  </div>
										</div>

									</form>
								</div>
							</div>
					</div>
					<div ng-switch-when="docs">
						<table class="table is-fullwidth is-striped is-hoverable">
							<thead>
				    		<tr>
				    			<th>#</th>
				    			<th>Nom</th>
				    			<th>Extension</th>
				    			<th>Type</th>
				    			<th>Taille</th>
				    			<th>Création</th>
				    			<th>Créateur</th>
				    			<th>Actions</th>
				    		</tr>
							</thead>
							<tbody>
								<tr ng-repeat="asset in current_selected_project.project_deliverables">
									<td><span class="has-text-weight-semibold is-uppercase">{{$index+1}}</span></td>
									<td>{{asset.deliverable_meta.display_name}}</td>
									<td>{{asset.deliverable_meta.extension}}</td>
									<td>{{asset.deliverable_type}}</td>
									<td>{{asset.deliverable_meta.size}}</td>
									<td>{{asset.created | date:'dd/MM/yyyy'}}</td>
									<td>{{asset.user_account.user.user_fullname}}</td>
									<td>	      
										<a href="/project_deliverables/download/{{asset.deliverable_content}}" target="_blank">Télécharger</a> <br>
										<a target="_blank" href="/img/deliverables/{{asset.deliverable_content}}">Visualiser</a><br>
										<a href="">Effacer</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div ng-switch-when="carto">
						<?= $this->element('Projects/modal_show_details/carto_vulns') ?>
					</div>
	</div>
    </section>
    <footer class="modal-card-foot is-none-radius">
      <button class="button is-black" type="button" ng-click="closeInfoModal()">Fermer</button>
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

