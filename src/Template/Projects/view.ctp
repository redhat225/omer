<section ui-view>
	  <style>
       #map{
        height: 400px;
        width: 100%;
       }
      </style>

    

	<div class="columns">
		<div class="column">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a ui-sref="admins.dashboard">Dashboard</a></li>
			    <li class="is-active"><a >Projets</a></li>
			  </ul>
			</nav>
		</div>
	</div>
	<!-- Pagintaion module -->
     	<div class="level is-mobile is-pad-bot-30">
     		<div class="level-left">
     			<div class="span level-item">
					<div class="field has-addons is-expanded">
						<div class="control is-expanded">
							<input type="text" class="input" ng-model="filter_keys">
						</div>
						<div class="control">
							<a class="button is-intercoton-green is-static">
								<span class="icon">
									<i class="fa fa-search"></i>
								</span>
								<span>Rechercher</span>
							</a>
						</div>
					</div>
     			</div>
					<div class="level-item">
						<button class="button is-eben" ui-sref="admins.projects.add">
							<span class="icon">
								<i class="fa fa-plus"></i>
							</span>
							<span>Créer un projet</span>
						</button>
					</div>
     		</div>
     		<div class="level-right">
				<div class="field has-addons level-item">
				  <p class="control">
				    <a class="button is-intercoton-green" ng-click="previous_page()" ng-disabled="is_loading">
				      <span class="icon is-small">
				        <i class="fa fa-chevron-left"></i>
				      </span>
				      <span class="has-text-weight-semibold">Précédent</span>
				    </a>
				  </p>
				  <p class="control">
				    <a class="button is-static is-disabled">
				      <span ng-bind="pagination.current_page" ng-hide="is_loading">1</span> sur <span ng-bind="pagination.all_pages" ng-hide="is_loading">45</span>
				    </a>
				  </p>
				  <p class="control">
				    <a class="button is-intercoton-green" ng-click="next_page()" ng-disabled="is_loading">
				      <span class="has-text-weight-semibold">Suivant</span>
				      <span class="icon is-small">
				        <i class="fa fa-chevron-right"></i>
				      </span>
				    </a>
				  </p>
				</div>
     		</div>
     	</div>
		<div>
				<!-- Tabular view -->
				<table class="table is-hoverable is-striped is-fullwidth">
					<thead>
						<tr class="eben-orange-b">
							<th class="has-text-white">Code Projet</th>
							<th class="has-text-white">BU</th>
							<th class="has-text-white">Périmètre</th>
							<th class="has-text-white">Client</th>
							<th class="has-text-white">Informations projet</th>
							<th class="has-text-white">Status</th>
							<th class="has-text-white">Création</th>
							<th class="has-text-white">Dernière modification</th>
							<th class="has-text-white">Action</th>
						</tr>
					</thead>
					<tbody ng-hide="is_loading_projects">
						<tr ng-repeat="project in projects | filter:filter_keys" ng-class="set_state_project_row(project.project_is_closed)" class="">
							<td class="is-uppercase has-text-weight-semibold">{{project.project_name}}</td>
							<td class="is-uppercase has-text-weight-semibold">{{project.project_meta.project_bu.name}}</td>
							<td class="is-uppercase has-text-weight-semibold">{{project.project_meta.project_bu_perimeter}}</td>
							<td class="is-uppercase has-text-weight-semibold">{{project.project_meta.project_customer.name}} - {{project.project_meta.project_customer.country}}</td>
							<td>
							   <button class="button is-eben is-outlined" ng-click='openViewModal(project,$index)'>
									<span class="icon">
										<i class="fa fa-info"></i>
									</span>
									<span class="has-text-weight-semibold">
										voir les infos
									</span>
							    </button>
							</td>
							<td ng-if="project.project_is_closed == false" class="has-text-weight-semibold">
								{{project.project_accompaniments[0].accompaniments_meta.status}}
							</td>
							<td ng-if="project.project_is_closed == true" class="has-text-weight-semibold">
								Clotûré
							</td>
							<td>{{project.created | date:'dd/MM/yyyy HH:mm:ss' }}</td>
							<td>{{project.modified | date:'dd/MM/yyyy HH:mm:ss' }}</td>
				  			<td>
									   <div class="dropdown is-hoverable is-right">
											  <div class="dropdown-trigger">
											    <button class="button">
											      <span class="icon is-small">
													<i class="fa fa-bars"></i>
											      </span>
											    </button>
											  </div>
											  <div class="dropdown-menu" id="dropdown-menu" role="menu">
											    <div class="dropdown-content">
													  <h3 class="is-size-7 has-text-eben has-text-weight-bold">Projet</h3>
  													 <a ng-click="openDelModal(project)" class="dropdown-item">
											            	Uploader Livrable
													 </a>
													  <a ui-sref="admins.projects.edit({project_id:project.id})" class="dropdown-item">
											            	Modifier Projet
													 </a>
													  <a ng-if="project.project_is_closed == false" ng-click="close_project(project,project.id)" class="dropdown-item">
											            	Clotûrer Projet
													 </a>
													  <a ng-if="project.project_is_closed == true" ng-click="close_project(project,project.id)" class="dropdown-item">
											            	Annuler Clotûre
													 </a>
											    </div>
											  </div>
									 </div>
				  			</td>
						</tr>
					</tbody> 
				</table>
		</div>
	</div>
	<!-- Pagintaion module -->
     	<div class="level is-mobile is-pad-bot-30">
     		<div class="level-left">
     			<div class="span level-item">
     				&nbsp;
     			</div>
     		</div>
     		<div class="level-right">
				<div class="field has-addons level-item">
				  <p class="control">
				    <a class="button is-intercoton-green" ng-click="previous_page()" ng-disabled="is_loading">
				      <span class="icon is-small">
				        <i class="fa fa-chevron-left"></i>
				      </span>
				      <span class="has-text-weight-semibold">Précédent</span>
				    </a>
				  </p>
				  <p class="control">
				    <a class="button is-static is-disabled">
				      <span ng-bind="pagination.current_page" ng-hide="is_loading">1</span> sur <span ng-bind="pagination.all_pages" ng-hide="is_loading">45</span>
				    </a>
				  </p>
				  <p class="control">
				    <a class="button is-intercoton-green" ng-click="next_page()" ng-disabled="is_loading">
				      <span class="has-text-weight-semibold">Suivant</span>
				      <span class="icon is-small">
				        <i class="fa fa-chevron-right"></i>
				      </span>
				    </a>
				  </p>
				</div>
     		</div>
     	</div>
     	<!-- modal area -->
     	<?= $this->element('Projects/modal_show_details') ?>
     	<?= $this->element('Deliverables/add') ?>
</section>
