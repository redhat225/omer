<style>
	.actor_selected{
		background:#ffa50047 !important;
	}
</style>

<div class="modal {{addActorModalTrigger}}" id="add_actor_modal">
  <div class="modal-background" ng-click="closeActorModal()"></div>
  <div class="modal-card">
    <header class="modal-card-head is-none-radius eben-orange-b">
      <p class="modal-card-title has-text-white">Ajouter des membres projet</p>
      <button class="delete" type="button" ng-click="closeActorModal()" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
    	<!-- Search Area -->
			<div class="field is-horizontal">
				<div class="field-label">
					<label for="" class="label">
						Recherche
					</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control has-icons-left">
							<input type="text" ng-model="search_actors" class="input">
							<span class="icon is-small is-left">
								<i class="fas fa-search"></i>
							</span>
						</div>
					</div>	
				</div>
			</div>

			<div class="actor_zone">
			<table class="table is-striped is-narrow is-hoverable is-fullwidth">
				<tbody>
					<tr class="actor_cadre" ng-repeat="actor in actors | filter:search_actors">
						<td>
							<p class="level">
								<p class="level-left">
									<span class="level-item">
										<strong>{{actor.fullname}}</strong>
									</span>
								</p>
								<p class="level-right">
							<span class="level-item">
						      	 <button type="button" ng-if="!actor.is_selected" ng-click="addActorSheetObject(actor)" class="button is-outlined is-eben-orange">
									<span class="icon">
										<i class="fas fa-plus"></i>
									</span>
									<span>
										Ajouter
									</span>
								</button>
						      	 <button type="button" ng-if="actor.is_selected" ng-click="retireActorSheetObject(actor)" class="button is-black">
									<span class="icon">
										<i class="fas fa-minus-circle"></i>
									</span>
									<span>Retirer</span>
								</button>
							</span>
								</p>
							</p>


						</td>
					</tr>
				</tbody>
			</table>

			</div>

    </section>
    <footer class="modal-card-foot is-none-radius">
      <button class="button is-black" type="button" ng-click="closeActorModal()">Fermer</button>
    </footer>
  </div>	
</div>

