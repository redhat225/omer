<div class="columns">
	<div class="column is-2-widescreen id-hidden-mobile is-pad-rgt-0">
		<?= $this->element('side-menu') ?>
	</div>
	<div class="column is-10-widescreen is-pad-top-40 is-12-mobile eben-light-grey-b" style="overflow: auto;height: 700px; ">
		<section ui-view ng-hide="preloader"></section>
</div>

<!-- Page loader -->



<script>
	$('.trigger-resizer').on('click', function(){
		$('#side-menu').toggleClass('is-display-none');
		$('#wide-menu').toggleClass('is-10');
	});
</script>