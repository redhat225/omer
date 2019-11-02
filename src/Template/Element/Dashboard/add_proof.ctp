<style>
	.modal-hover-tabs li:not(.is-active) a:hover{
		color: #f85800 !important;
		background: black !important;
		transition-duration: 300ms;
	}
</style>

<div class="modal {{add_proof_modal_trigger}}">
  <div class="modal-background" ng-click="close_add_proof_modal_trigger()"></div>
  <div class="modal-card" style="width: 75% !important;">
		   <header class="modal-card-head is-none-radius eben-black-b">
	      <p class="modal-card-title has-text-white">Upload Preuves</p>
	      <button class="delete" type="button" ng-click="close_add_proof_modal_trigger()" aria-label="close"></button>
	    </header>
	    <section class="modal-card-body is-pad-top-0 is-pad-rgt-0 is-pad-lft-0 is-pad-bot-0">
	    	<div class="columns is-centered">
	    		<div class="column is-2-widescreen eben-black-b">
							<div required class="has-text-centered is-centered is-mar-bot-30 is-mar-top-30 drop-box" ngf-select="inspect_asset($files)" ngf-multiple="true" ngf-keep="'distinct'" ngf-drop="inspect_asset($files)" ng-model="selected_requirement.assets" name="cover" ngf-max-total-size="'100MB'">	
									<img width="300px" height="300px" src='/img/assets/forms/image_upload_drag_area_2.png'">
							</div>

							<div class="image-preview has-text-centered is-centered" ng-if="selected_requirement.asset == 'file' && selected_requirement.assets!=''">
									<img src="/img/assets/forms/upload_file_vector.png" style="max-width: 50%;" />
							</div>
	    		</div>
	    		<div class="column is-10-widescreen">
	    			    <table class="table striped is-fullwidth" style="overflow: scroll;">
	    			    	<thead>
	    			    		<tr>
	    			    			<th>#</th>
	    			    			<th>Nom</th>
	    			    			<th>Extension</th>
	    			    			<th>Type</th>
	    			    			<th>Taille</th>
	    			    			<th>Effacer</th>
	    			    		</tr>
	    			    	</thead>
	    			    	<tbody>
	    			    		<tr ng-repeat="asset in selected_requirement.assets track by $index">
	    			    			<td>{{$index+1}}</td>
	    			    			<td>
	    			    				<div class="field">
	    			    					<div class="control">
	    			    						<input type="text" readonly required class="input" ng-model="asset.name">
	    			    					</div>
	    			    				</div>
	    			    			</td>
	    			    			<td>
	    			    				{{asset.type}}
	    			    			</td>
	    			    			<td>
	    			    				<div class="field">
	    			    					<div class="select">
	    			    						<div class="control">
	    			    							<select required ng-options="type for type in register.project_deliverables.types" ng-model="asset.deliverable_type">
	    			    							</select>
	    			    						</div>
	    			    					</div>
	    			    				</div>
	    			    			</td>
	    			    			<td>
	    			    				{{asset.size}} KB
	    			    			</td>
	    			    			<td>
	    			    				<span class="icon" ng-click="remove_asset_audit_box(asset, $index)">
	    			    					<i class="fa fa-window-close"></i>
	    			    				</span>
	    			    			</td>
	    			    		</tr>
	    			    	</tbody>
	    			    </table>
	    		</div>
	    	</div>
	    </section>
	    <footer class="modal-card-foot is-none-radius mcen-grey-b">
	      <button type="button" class="button is-pulled-right is-outlined is-black" type="button" ng-click="close_add_proof_modal_trigger()">Fermer</button>
	    </footer>
  </div>	
</div>
