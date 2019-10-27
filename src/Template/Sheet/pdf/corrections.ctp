<style>
	tbody{
		font-size: 0.9rem !important;
	}
</style>
<div class="container">
    <h1 class="title is-mar-top-30">
        Fiche de suivi correction - <span class="is-uppercase"><?= $vulnerability_sheet['project']['project_name'] ?></span> 
    </h1>
</div>

<div class="row">
	<form ng-submit="create(correction)">
		<!-- First section -->
		<div class="field is-horizontal">
			<div class="field-label">
				<label for="" class="label">
					<?= $vulnerability_sheet['vulnerability_report_denomination'] ?>
				</label>
			</div>
		</div>

		<table class="table" style="border: none;">
			<thead>
				<tr>
					<th>Période de début</th>
					<th>Période de fin</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="has-text-weight-semibold">
						<?= $vulnerability_sheet['begin_date'] ?>
					</td>
					<td class="has-text-weight-semibold">
						<?= $vulnerability_sheet['end_date'] ?>
					</td>
				</tr>
			</tbody>
		</table>
		<!-- Third section -->
		<h3 class="title">
			Résumé des vulnérabilités
		</h3>
		
		<div style="position: relative;">
		<div class="" style="float: left;">
			<h4>Résumé des découvertes</h4>
			<span style="background: #c00000; width: 50px; min-width: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Critiques - <span class="has-text-weight-bold"><?= $severities['critique'] ?></span><br>
			<span style="background: #ffc000; width: 50px; min-width: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Elevés - <span class="has-text-weight-bold"><?= $severities['eleve'] ?></span> <br>
			<span style="background: #a8d08d; width: 50px; min-width: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Moyens - <span class="has-text-weight-bold"><?= $severities['moyen'] ?></span> <br>
			<span style="background: #8eaadb; width: 50px; min-width: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Faibles - <span class="has-text-weight-bold"><?= $severities['faible'] ?></span>
		</div>
		<div class="" style="float: right;">
			<h4>Cartographie des vulnérabilités</h4>
			<?php if($surfaces !== false) :?>
				<?php foreach ($surfaces as $surface) :?>
					  <span class="has-text-weight-bold"><?= $surface['type'] ?> - <?= $surface['encountered'] ?></span><br>
				<?php endforeach; ?>
		    <?php endif; ?>
		</div>
		</div>


		<table class="table is-striped is-fullwidth" style="margin-top:50px;">
			<thead>
				<tr class="eben-orange-b">
					<th style="background: #f85800;color:white;">#</th>
					<th style="background: #f85800;color:white;">Type</th>
					<th style="background: #f85800;color:white;">Description</th>
					<th style="background: #f85800;color:white;">Scope</th>
					<th style="background: #f85800;color:white;">Résumé</th>
					<th style="background: #f85800;color:white;">Risque</th>
					<th style="background: #f85800;color:white;">Recommandation</th>
				</tr>
			</thead>
<!-- #c00000 red -->
<!-- #ffc000  yellow-->
<!-- #a8d08d  green-->
<!-- #8eaadb blue-->
			<tbody>
			<?php if($surfaces !== false) :?>
				<?php foreach ($surfaces as $surface) :?>
					<?php foreach ($surface['vulns'] as $key => $vuln) :?>
						<tr>
							<td><?= ($key+1) ?></td>
							<td class="has-text-weight-semibold"><?= $vuln->type ?></td>
							<td><?= $vuln->description ?></td>
							<td><?= $vuln->scope ?></td>
							<td><?= $vuln->resume ?></td>
							<?php if($vuln->riskrating=='critique') :?>
							   <td class="has-text-weight-semibold" style="background: #c00000;color:white;"><?= $vuln->riskrating ?></td>
							<?php endif; ?>
		<?php if($vuln->riskrating=='eleve') :?>
							   <td class="has-text-weight-semibold" style="background: #ffc000;"><?= $vuln->riskrating ?></td>
							<?php endif; ?>

		<?php if($vuln->riskrating=='moyen') :?>
							   <td class="has-text-weight-semibold" style="background: #a8d08d"><?= $vuln->riskrating ?></td>
							<?php endif; ?>

		<?php if($vuln->riskrating=='faible') :?>
							   <td class="has-text-weight-semibold" style="background: #8eaadb"><?= $vuln->riskrating ?></td>
							<?php endif; ?>

							<td><?= $vuln->recommandation ?></td>
						</tr>
				    <?php endforeach; ?>
				<?php endforeach; ?>
		    <?php endif; ?>
			</tbody>
		</table>
	</form>
</div>		
