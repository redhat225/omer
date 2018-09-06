<div class="columns">
	<div class="column is-2 is-pad-rgt-0">
		<?= $this->element('side-menu') ?>
	</div>
	<div class="column is-10 mcen-lightgrey-b" style="overflow: auto;height: 700px;">
		<section ui-view ng-hide="preloader"></section>
        <div class="dropdown is-hoverable">

        <!-- Down image -->
        <div class="is-position-relative" ng-hide="preloader">    
			<figure class="is-position-absolute is-hidden-mobile" style="bottom:0px; left:-180px; z-index: -9999;">
					<img src="/img/assets/skeleton/loader_static_2.png" alt="">
			</figure>
        </div>
	</div>
</div>


<script>
	$('.trigger-resizer').on('click', function(){
		$('#side-menu').toggleClass('is-display-none');
		$('#wide-menu').toggleClass('is-10');
	});
</script>