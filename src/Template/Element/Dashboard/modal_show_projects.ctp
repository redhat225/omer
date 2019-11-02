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

<div class="modal {{showInfoProjectModal}}" id="show_workflow_modal" ng-if="current_selected_project">
  <div class="modal-background" ng-click="closeInfoModal()"></div>
  <div class="modal-card" style="width:80%;">
    <header class="modal-card-head is-none-radius eben-black-b">
      <p class="modal-card-title has-text-eben">Informations Projet - <span ng-bind="current_selected_project.project_name"></span> </p>
      <button class="delete" type="button" ng-click="closeInfoModal()" aria-label="close"></button>
    </header>
    <section class="modal-card-body is-pad-top-0 is-pad-rgt-0 is-pad-lft-0" style="overflow-x: hidden;">
	<div class="tabs is-centered is-boxed if-fullwidth eben-orange-b">
	  <ul class="modal-hover-tabs">
	    <li class="is-active">
	      <a ng-click="workflow_tab = 'history'">
	        <span class="icon is-small"><i class="fas fa-history"></i></span>
	        <span>Details</span>
	      </a>
	    </li>
	    <li>
	      <a ng-click="workflow_tab = 'carto'">
	        <span class="icon is-small"><i class="fas fa-comments"></i></span>
	        <span>Cartographie Vulnérabilités</span>
	      </a>
	    </li>	    
	    <li>
	      <a ng-click="workflow_tab = 'comments'">
	        <span class="icon is-small"><i class="fas fa-comments"></i></span>
	        <span>Planning</span>
	      </a>
	    </li>
	    <li>
	      <a ng-click="workflow_tab = 'history_details'">
	        <span class="icon is-small"><i class="fas fa-comments"></i></span>
	        <span>Historique</span>
	      </a>
	    </li>
	    <li>
	      <a ng-click="workflow_tab = 'docs'">
	        <span class="icon is-small"><i class="fas fa-file-archive"></i></span>
	        <span>Livrables</span>
	      </a>
	    </li>
	  </ul>
	</div>
	<!-- TAbs Switch Area -->
	<div ng-switch on="workflow_tab">
		<div ng-switch-when="history">
		    <section class="modal-card-body">
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                Description
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                 <span class="has-text-weight-semibold" ng-bind="current_selected_project.project_meta.project_description"></span> <br>
		              </div>
		            </div>
		          </div>
		      </article>
		      <br>
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                Période/Priorité
		              </label>
		            </div>
		            <div class="field-body">	 
		              <div class="field">
		                 <span class="has-text-weight-semibold" ng-bind="current_selected_project.project_meta.project_semester"></span> -
		                 <span class="has-text-weight-semibold" ng-bind="current_selected_project.project_meta.project_year"></span> -
		                 <span class="has-text-weight-semibold" ng-bind="current_selected_project.project_meta.project_priority"></span>
		              </div>
		            </div>
		          </div>
		      </article>
		      <br>	
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                Gouvernance
		              </label>
		            </div>
		            <div class="field-body">	 
		              <div class="field">
		                 <span class="has-text-weight-semibold" ng-bind="current_selected_project.project_meta.project_governance_type"></span>
		              </div>
		            </div>
		          </div>
		      </article>
		      <br>		
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                Porteur/Client 
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                 <span class="has-text-weight-semibold" ng-bind="current_selected_project.project_meta.project_carrier"></span> /
		                 <span class="has-text-weight-semibold" ng-bind="current_selected_project.project_meta.project_customer"></span>
		              </div>
		            </div>
		          </div>
		      </article>
		      <br>
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                Enjeux Strategiques 
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                 <span class="has-text-weight-semibold" ng-bind="current_selected_project.project_meta.project_issue"></span>
		              </div>
		            </div>
		          </div>
		      </article>
		      <br>
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                Programme 
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                 <span class="has-text-weight-semibold" ng-bind="current_selected_project.project_meta.progam"></span>
		              </div>
		            </div>
		          </div>
		      </article>
		      <br>
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                Contributeurs
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                 <div ng-repeat="contributor in current_selected_project.project_meta.contributors">
		                    <span class="has-text-weight-semibold" ng-bind="contributor.fullname">
		                    </span> <br>
		                    <span class="" ng-bind="contributor.role">
		                    </span>
		                 </div>
		              </div>
		            </div>
		          </div>
		      </article>
		      <br>
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                Indices projet
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                Exposition Franchise
		              </div>
		              <div class="field">
		                <p class="has-text-right">
		                   <span ng-if="current_selected_project.project_meta.indices.project_is_franchise_exposed=true" class="has-text-weight-semibold">Oui</span>
		                   <span ng-if="current_selected_project.project_meta.indices.project_is_franchise_exposed==false" class="has-text-weight-semibold">Non</span>                   
		                </p>
		               
		              </div>
		            </div>
		          </div>
		      </article>

		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                &nbsp;
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                Service OCI et filiales?
		              </div>
		              <div class="field">
		                <p class="has-text-right">
		                    <span ng-if="current_selected_project.project_meta.indices.project_is_for_oci_and_subs==true" class="has-text-weight-semibold">Oui</span>
		                    <span ng-if="current_selected_project.project_meta.indices.project_is_for_oci_and_subs==false" class="has-text-weight-semibold">Non</span> 
		                </p>
		               
		              </div>
		            </div>
		          </div>
		      </article>
		    <br>



		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                &nbsp;
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                Centralisation de données client?
		              </div>
		              <div class="field">
		                <p class="has-text-right">
		                    <span ng-if="current_selected_project.project_meta.indices.project_is_client_data_centralized==true" class="has-text-weight-semibold">Oui</span>
		                    <span ng-if="current_selected_project.project_meta.indices.project_is_client_data_centralized==false" class="has-text-weight-semibold">Non</span>
		                </p>
		              </div>
		            </div>
		          </div>
		      </article>
		  <br>
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                &nbsp;
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                Connectivité Internet
		              </div>
		              <div class="field">
		                <p class="has-text-right">
		                   <span ng-if="current_selected_project.project_meta.indices.project_is_internet_connected==true" class="has-text-weight-semibold">Oui</span>
		                   <span ng-if="current_selected_project.project_meta.indices.project_is_internet_connected==false" class="has-text-weight-semibold">Non</span>
		                </p>
		              </div>
		            </div>
		          </div>
		      </article>
		      <br>
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                &nbsp;
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                Connexions Tierces
		              </div>
		              <div class="field">
		               <p class="has-text-right">
		                  <span ng-if="current_selected_project.project_meta.indices.project_is_used_third_connexions==true" class="has-text-weight-semibold">Oui</span>
		                  <span ng-if="current_selected_project.project_meta.indices.project_is_used_third_connexions==false" class="has-text-weight-semibold">Non</span>
		                </p>
		              </div>
		            </div>
		          </div>
		      </article>
		      <br>
		      <article>
		          <div class="field is-horizontal">
		            <div class="field-label">
		              <label for="">
		                &nbsp;
		              </label>
		            </div>
		            <div class="field-body">
		              <div class="field">
		                Utilisation de données sensibles?
		              </div>
		              <div class="field">
		                <p class="has-text-right">
		                   <span ng-if="current_selected_project.project_meta.indices.project_is_used_harmful_data==true" class="has-text-weight-semibold">Oui</span>
		                   <span ng-if="current_selected_project.project_meta.indices.project_is_used_harmful_data==false" class="has-text-weight-semibold">Non</span>
		                </p>
		              </div>
		            </div>
		          </div>
		      </article>
		    </section>
		</div>
		<div ng-switch-when="comments">
				<div class="steps">
				  <div class="step-item is-eben">
				    <div class="step-marker">
						T-1
				    </div>
				    <div class="step-details">
				      <p class="step-title">Etude</p>
				      <p>
				      	{{current_selected_project.project_plannings[0].planning_meta.t_1_date | date:'yyyy-MM-dd'}}
				      </p>
				    </div>
				  </div>
				  <div class="step-item">
				    <div class="step-marker">T1</div>
				    <div class="step-details">
				      <p class="step-title">Revue Architecture</p>
				      <p>
						{{current_selected_project.project_plannings[0].planning_meta.t1_date | date:'yyyy-MM-dd'}}
				      </p>
				    </div>
				  </div>
				  <div class="step-item">
				    <div class="step-marker">T3</div>
				    <div class="step-details">
					     <p class="step-title">Mise en Production</p>
					     <p>
							{{current_selected_project.project_plannings[0].planning_meta.t3_date | date:'yyyy-MM-dd'}}
					     </p>	
				    </div>
				  </div>

				  <div class="step-item">
				    <div class="step-marker">T3C</div>
				    <div class="step-details">
				      <p class="step-title">Clotûre Technique</p>
				      <p>
						{{current_selected_project.project_plannings[0].planning_meta.t3c_date | date:'yyyy-MM-dd'}}
				      </p>
				    </div>
				  </div>
				</div>
		</div>
		<div ng-switch-when="history_details">
				<div class="columns is-pad-lft-20 is-pad-rgt-20">
					<div class="column" style="overflow: scroll;height: 500px;">
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
							<a target="_blank" href="/img/deliverables/{{asset.deliverable_content}}">Visualiser</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div ng-switch-when="carto">
			<?= $this->element('Dashboard/carto_vulns') ?>
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

