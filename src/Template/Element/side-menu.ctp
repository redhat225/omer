<style>
	.menu-list a.is-active{
		background: #d61a27;
		color: white !important;
		transition-duration: 300ms;
	}

	.menu-item-wrapper.is-active .menu-item .menu-icon, .menu-item-wrapper.is-active .menu-item .menu-text{
		color: #d61a27 !important;
		transition-duration: 300ms;

	}

	.menu-item-wrapper.is-active{
		background: #0E0E0E;
		transition-duration: 300ms;
	}

	.menu-list li a:hover{
		background: #ccc;
		color: red !important;
		transition-duration: 300ms;
	}

	.side-element.is-active{
		border-left:5px solid #0E0E0E;
	}

</style>

<section class="is-small has-text-red">
	<div class="menu-wrapper">

		<h2 class="subtitle has-text-centered has-text-weight-semibold is-pad-top-30 is-pad-bot-2">
			<figure class="has-text-centered " >
			  <img src="/img/assets/chartkit/logodp.png" alt="" style="max-height:100%; width: 70%;">
			</figure>
		</h2>
		   <a ui-sref="admins.profile.edit">
			<figure class="has-text-centered profile-figure" >
			  <img ng-src="/img/assets/admins/avatar/{{profile.user_avatar}}" alt="" style="max-height:100%; border-radius:50%; width: 100px;">
			</figure>
		   </a>
		<h2 class="subtitle is-7 has-text-centered has-text-black has-text-weight-semibold has-text-weight-bold" ng-bind="profile.username"></h2>

		<aside class="menu">
		  <ul class="menu-list">
		    <li class="">
		       <a ui-sref="admins.dashboard" ui-sref-active="is-active" class="has-text-black has-text-weight-semibold side-element has-text-weight-bold is-radiusless">
		       	<span class="icon is-pad-rgt-15">
		       	  <i class="fa fa-tachometer"></i>
		       </span>Dashboard</a>
		   </li>
		    <li class="">
		       <a ui-sref="admins.projects.view" ui-sref-active="is-active" class="has-text-black has-text-weight-semibold is-radiusless">
		       	<span class="icon is-pad-rgt-15">
		       	  <i class="fa fa-folder-open-o"></i>
		       </span>Projets</a>
		    </li>

		    <li class="">
		       <a ui-sref="admins.accounts.view" ui-sref-active="is-active" class="has-text-black has-text-weight-semibold is-radiusless">
		       	 <span class="icon is-pad-rgt-15">
		       	   <i class="fa fa-users"></i>
		         </span>Gérer les utilisateurs
		       </a>
		    </li>
		    <li class="" ui-sref="admins.profile.edit">
		       <a ui-sref="admins.others" ui-sref-active="is-active" class="has-text-black has-text-weight-semibold is-radiusless">
		       	<span class="icon is-pad-rgt-15">
		       	  <i class="fa fa-user"></i>
		       </span>Profil</a>
		    </li>

		    <li class="side-element">
		       <a href="/admins/logout" target="_self" class="has-text-black has-text-weight-semibold is-radiusless">
		       	<span class="icon is-pad-rgt-15">
		       		<i class="fa fa-power-off"></i>
		       </span>Déconnexion</a>
		   </li>
		</aside>
	</div>
</section>
<section class="is-small">
	    <div class="signature-wrapper has-text-centered is-pad-top-50 is-pad-bot-200">
			  <img src="/img/assets/chartkit/signature.png" alt="" style="width: 125px">
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


