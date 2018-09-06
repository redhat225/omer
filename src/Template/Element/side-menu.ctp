<style>
	.menu-list a.is-active{
				background: #1c907f;
			transition-duration: 300ms;
	}

	.menu-item-wrapper.is-active .menu-item .menu-icon, .menu-item-wrapper.is-active .menu-item .menu-text{
			color: orange !important;
		transition-duration: 300ms;

	}

	.menu-item-wrapper.is-active{
		background: #c8e2d5;
		transition-duration: 300ms;
	}

	.menu-list li a:hover{
		background: #444;
		transition-duration: 300ms;
	}

	.side-element.is-active{
		border-left:5px solid #fff;
	}
</style>

<section class="is-small has-text-white hero is-primary">
	<div class="menu-wrapper">
		<h2 class="subtitle has-text-centered has-text-weight-semibold is-pad-top-2 is-pad-bot-2">
	<figure class="has-text-centered">
			  <img src="/img/assets/logo.png" alt="" style="max-height:100%;width: 100%;">
			</figure>
		</h2>
			<figure class="has-text-centered">
			  <img src="/img/assets/riehl_avatar.png" alt="" style="max-height:100%; border-radius:50%; width: 100px;">
			</figure>
		<h2 class="subtitle is-7 has-text-centered has-text-weight-bold">Mr FALILU ABUDUL</h2>

		<aside class="menu">
		  <ul class="menu-list">
		    <li class="">
		       <a ui-sref="admins.dashboard" ui-sref-active="is-active" class="has-text-white side-element has-text-weight-bold">
		       	<span class="icon is-pad-rgt-15">
		       	  <i class="fab fa-first-order"></i>
		       </span>Dashboard</a>
		   </li>
		    <li class="">
		       <a ui-sref="admins.others" ui-sref-active="is-active" class="has-text-white">
		       	<span class="icon is-pad-rgt-15">
		       	  <i class="fas fa-comment-alt"></i>
		       </span>Messages</a>
		   </li>

		    <li class="">
		       <a ui-sref="admins.others" ui-sref-active="is-active" class="has-text-white">
		       	<span class="icon is-pad-rgt-15">
		       	<i class="fas fa-tasks"></i>
		       </span>Tâches</a>
		   </li>

		    <li class="">
		       <a ui-sref="admins.others" ui-sref-active="is-active" class="has-text-white">
		       	<span class="icon is-pad-rgt-15">
		       	  <i class="fas fa-life-ring"></i>
		       </span>Support</a>
		   </li>

		    <li class="side-element">
		       <a href="/admins/logout" target="_self" class="has-text-white">
		       	<span class="icon is-pad-rgt-15">
		       		<i class="fas fa-sign-out-alt"></i>
		       </span>Déconnexion</a>
		   </li>
		</aside>
	</div>
</section>
<section class="is-small hero is-primary">
	    <div class="signature-wrapper has-text-centered is-pad-top-50 is-pad-bot-200">
			  <img src="/img/assets/signature.png" alt="" style="width: 125px">
	</div>
</section>


<script>
	$(document).ready(function(){
		$('.menu-list-include-wrapper').on('click', function(){
			$('.menu-list-include-wrapper').removeClass('active');
			$(this).toggleClass('is-active');
			if($(this).hasClass('is-active'))
			  $(this).next('ul').slideDown();
			else
			  $(this).next('ul').slideUp();

		});
	});
</script>


