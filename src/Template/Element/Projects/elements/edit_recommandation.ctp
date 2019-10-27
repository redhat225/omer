<div id="quickviewDefault" class="quickview {{quick_view_trigger}}">
  <header class="quickview-header eben-orange-b">
    <p class="title has-text-white has-text-weight-semibold">Edition Résumé/Scope/Recommandation</p>
    <span class="delete" data-dismiss="quickview" ng-click="close_quick_view()"></span>
  </header>

  <div class="quickview-body">
    <div class="quickview-block">
          <h1 class="subtitle">Résumé vulnérabilité</h1>
          <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel.content_resume"></textarea>
          <br>
          <h1 class="subtitle">Scope</h1>
          <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel.scope"></textarea>
          <br>
          <h1 class="subtitle">Recommandation</h1>
          <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel.content_recommandation"></textarea>
    </div>
  </div>

  <footer class="quickview-footer">
      <button class="button is-eben" ng-click="save_edit_recommandation()">
         Sauvegarder
      </button>
  </footer>
</div>

