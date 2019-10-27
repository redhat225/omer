		<div id="quickviewDefault" class="quickview {{initial_audit_report_quick_view_trigger}}">
		  <header class="quickview-header">
		    <p class="title">Solutions - Exigence {{initial_audit_report_quick_view_condition_id}}</p>
		    <span class="delete" ng-click="close_initial_audit_report_quick_view()" data-dismiss="quickview"></span>
		  </header>

		  <div class="quickview-body">
		    <div class="quickview-block">
		    <table class="is-fullwidth is-striped is-hoverable">
		    	<tr ng-repeat="solution in solutions_pcidss321" ng-if="solution.solution_linked_condition_id == initial_audit_report_quick_view_condition_id">
		    		<td>
        <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
		    		</td>
		    	</tr>
		    </table>

		    </div>
		  </div>

		  <footer class="quickview-footer">

		  </footer>
		</div>