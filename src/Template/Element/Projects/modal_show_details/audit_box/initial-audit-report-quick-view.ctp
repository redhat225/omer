		<div id="quickviewDefault" class="quickview {{initial_audit_report_quick_view_trigger}}">
		  <header class="quickview-header">
		    <p class="title">Solutions - Exigence {{initial_audit_report_quick_view_condition_id}}</p>
		    <span class="delete" ng-click="close_initial_audit_report_quick_view()" data-dismiss="quickview"></span>
		  </header>

		  <div class="quickview-body">
		    <div class="quickview-block">
		    	<div class="box" ng-repeat="solution in solutions_pcidss321" ng-if="solution.solution_linked_condition_id == initial_audit_report_quick_view_condition_id">
		    		<p>
				        <strong>{{solution.solution_constructor}}</strong> <br>
				        <span>
				        	{{solution.solution_denomination}}
				        </span> <br>
				        <span>{{solution.solution_full_description}}</span>
				        <a href="{{solution.solution_link}}">
				        	lien
				        </a> <br>
		    		</p>
		    		<div class="is-divider" data-content="OR"></div>
		    	</div>
		    </div>
		  </div>

		  <footer class="quickview-footer">

		  </footer>
		</div>