<div class="columns">
	<div class="column is-2-widescreen id-hidden-mobile eben-b is-pad-rgt-0">
		<?= $this->element('side-menu') ?>
	</div>
	<div class="column is-10-widescreen is-pad-top-40 is-12-mobile" style="overflow: auto;height: 700px; ">
		<section ui-view ng-hide="preloader"></section>
</div>

<!-- Page loader -->
<div class="pageloader is-left-to-right is-eben" ng-class="$root.call_pageloader" style="background:#d24040 url('/img/assets/image/minion_loading_stats.png') no-repeat 100% 100%;">
		<nav class="navbar is-pad-top-0 is-mar-top-0 is-transparent" role="navigation" aria-label="main navigation">
		  <div class="navbar-brand">
		    <a class="navbar-item" href="https://bulma.io">
		      <img src="/img/assets/skeleton/dp-logo.png" style="max-height: 2.2rem;">
		    </a>
		  </div>
		</nav>
        <a class="navbar-item" href="#">
			<img src="/img/assets/skeleton/d4f7ed6133d151c34f3c2025d118c2ec.gif" alt="DATAPROTECT SecView" style="max-height: 100%;">
		</a>
		<p>
			<span class="title has-text-white has-text-weight-semibold">Chargement en cours</span>
		</p>
</div>


<script>
	$('.trigger-resizer').on('click', function(){
		$('#side-menu').toggleClass('is-display-none');
		$('#wide-menu').toggleClass('is-10');
	});
</script>