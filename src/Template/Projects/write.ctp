<div class="steps" id="stepsDemo">
  <div class="step-item is-active is-success">
    <div class="step-marker">1</div>
    <div class="step-details">
      <p class="step-title">Metadonnées</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">2</div>
    <div class="step-details">
      <p class="step-title">Cartographie Vulnérabilités</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">3</div>
    <div class="step-details">
      <p class="step-title">Rédaction</p>
    </div>
  </div>
  <div class="step-item">
    <div class="step-marker">4</div>
    <div class="step-details">
      <p class="step-title">Enregistrement</p>
    </div>
  </div>
  <div class="steps-content">
    <div class="step-content has-text-centered is-active">
      <!-- Meta data -->
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Type</label>
        </div>
      <div class="field-body">
        <div class="field">
          <div class="control has-icons-left has-icons-right">
            <div class="select">
                <select required ng-model="project_deliverable.deliverable_type" ng-options="type for type in register.project_deliverables.types">
                </select>
              </div>
          </div>
        </div>
      </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Date Début</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control has-icon has-icon-right">
              <input class="input" type="date" ng-model="project_deliverable.deliverable_meta.begin_date">
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Date Fin</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control has-icon has-icon-right">
              <input class="input" type="date" ng-model="project_deliverable.deliverable_meta.finished_date">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carto vulns -->
    <div class="step-content has-text-centered">
        
        <button class="button is-oci" type="button" ng-click="add_address()">
          <i class="fas fa-plus"></i>
          <span>&nbsp;Ajouter une ip</span>
        </button>
        <table class="table is-striped is-fullwidth">
          <thead>
            <tr>
              <th>Id</th>
              <th>Scope</th>
              <th>Effacer</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="ip in correction.project_details.scope track by $index" ng-if="ip.id">
              <td>{{$index+1}}</td>
              <td>
                <div class="control">
                  <input type="text" class="input" ng-model="ip.scope" ng-maxlength="16"/>
                </div>
              </td>
              <td>
                <button type="button" class="button is-outlined is-black" ng-click="remove_address(ip,$index)">
                  <i class="fas fa-times"></i>
                  <span>&nbsp;Effacer</span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- Add Os's -->
        <button class="button is-oci" type="button" ng-click="add_os()">
          <i class="fas fa-plus"></i>
          <span>&nbsp;Définir un OS</span>
        </button>
        <table class="table is-striped is-fullwidth">
          <thead>
            <tr>
              <th>Id</th>
              <th>Système</th>
              <th>Version</th>
              <th>Kernel</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="os in correction.project_details.os track by $index" ng-if='os.id'>
              <td>
                {{$index+1}}
              </td>
              <td>
                <div class="control">
                  <div class="select">
                    <select ng-options="s.os for s in systems" required ng-model="os.system"></select>
                  </div>
                </div>
              </td>
              <td>
                <div class="control">
                  <div class="select">
                    <select ng-options="v for v in os.system.versions" required ng-model="os.version"></select>
                  </div>
                </div>
              </td>
              <td>
                <div class="control">
                  <input type="text" placeholder="optionnel" class="input" ng-model="os.kernel"/>
                </div>
              </td>
              <td>
                <button class="button is-black is-outlined" type="button" ng-click="remove_os(os, $index)">
                  <i class="fas fa-times"></i>
                  <span>&nbsp;Effacer</span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- Second section -->
        <h3 class="title">
          Alertes
        </h3>
        <span class="button is-oci is-radiusless" ng-click="add_alert()">
          <i class="fas fa-plus"></i>
          <span>&nbsp;Ajouter une alerte</span>
        </span>
        <!-- Alerts enumerations -->
        <table class="table is-fullwidth is-striped is-centered">
          <thead>
            <tr>
              <th>Id</th>
              <th>Description</th>
              <th>
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="alert in correction.project_alerts track by $index" ng-if="alert.description">
              <td>
                {{$index+1}}
              </td>
              <td>
                <div class="control">
                  <input type="text" ng-model="alert.description" class="input" />
                </div>
              </td>
              <td>
                <button type="button" ng-click="remove_alert(alert,$index)" class="button is-black is-outlined">
                  <span class="icon">
                    <i class="fas fa-times"></i>
                  </span>
                  <span>
                    Effacer
                  </span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- Third section -->
        <h3 class="title">
          Vulnérabilités
        </h3>
        
        <div class="columns">
          <div class="column">
            <canvas  id="pie_vuln_chart" class="chart chart-pie"
              chart-data="data_pie_vuln" chart-options="pie_default_chart_options" chart_colors="colors_pie" chart-labels="data_pie_labels" chart-colors="colors_pie">
            </canvas> 
          </div>
          <div class="column">
            <canvas id="bar_vuln_chart" class="chart chart-bar"
              chart-data="data_bars" chart-options="bar_default_chart_options" chart_colors="colors_pie" chart-labels="labels_bars" chart-series="series_bars">
            </canvas>
          </div>
        </div>
            <div class="field is-horizontal">
              <div class="field-label">
                <label for="" class="label has-text-left">Recherche Vulnérabilité</label>
              </div>
              <div class="field-body">
                <div class="field">
                      <div class="dropdown is-hoverable" style="display: block !important;">
                        <div class="dropdown-trigger">
                           <div class="control is-expanded">
                              <input ng-model="vuln_filter" type="text" style="width: 100%;" aria-haspopup="true" aria-controls="dropdown-menu">
                           </div>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu" role="menu" style="width: 100%;">
                          <div class="dropdown-content">
                            <a href="#" ng-repeat="vuln in vulnerabilities | filter: vuln_filter" ng-click="add_vuln(vuln)" class="dropdown-item">
                              <span>{{vuln.vulnerability_denomination}}</span>
                               <span class="icon has-text-oci tooltip is-tooltip-oci is-tooltip-multiline is-tooltip-right" data-tooltip="{{vuln.vulnerability_explicit_denomination}}">
                                 <i class="fas fa-info-circle"></i>
                               </span>
                            </a>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
            </div>

        <table class="table is-striped is-fullwidth">
          <thead>
            <tr>
              <th>Type</th>
              <th>Description</th>
              <th>RiskRating</th>
              <th>Proposition de Mitigation</th>
              <th>Scope</th>
              <th>Technical Mitigation</th>
              <th>Captures</th>
              <th>Effacer</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="vuln in correction.project_tracking_corrections track by $index" ng-if="vuln.correction_vuln">
              <td>{{vuln.correction_vuln_type}}</td>
              <td>{{vuln.correction_vuln}}</td>
              <td>
                <div class="control has-icons-left">
                  <div class="select">
                    <select ng-change="evalute_risk(vuln.correction_vuln_type,vuln.correction_custom_rating,'change',{{vuln.correction_custom_rating}})" ng-model="vuln.correction_custom_rating" ng-options="r.value as r.rating for r in vuln_riskratings">
                    </select>
                  </div>
                  <span class="icon is-left">
                    <i class="fas fa-shield-alt"></i>
                  </span>
                </div>
              </td>
              <td class="has-text-centered">
                <span class="icon tooltip is-tooltip-multiline is-tooltip-oci is-tooltip-top" data-tooltip="{{vuln.correction_mitigation_proposal}}">
                  <i class="fas fa-info-circle has-text-oci"></i>
                </span>
              </td>
              <td>
                <div class="field">
                  <div class="control">
                      <div class="select is-multiple is-narrow">
                        <select style="min-height: 100px; height: inset !important;" multiple required ng-options="s.scope for s in correction.project_details.scope" ng-model="vuln.correction_scope">
                        </select>
                      </div>
                  </div>
                </div>
              </td>
              <td class="has-text-centered">
                <span class="icon tooltip is-tooltip-multiline is-tooltip-oci is-tooltip-top" data-tooltip="{{vuln.correction_technical_mitigation}}">
                  <i class="fas fa-info-circle has-text-oci"></i>
                </span>
              </td>
              <td>
                <div class="field is-grouped">
                  <p class="control">
                    <a ng-model="vuln.correction_captures" class="button is-oci"  ngf-select="evaluate_capture($file,vuln)" ngf-max-total-size="'10MB'" ngf-multiple="true" ngf-accept="'image/*'">Upload</a>
                  </p>
                  <p class="control">
                    <a class="button is-oci is-outlined" ng-click="modal_show_captures(vuln, $index)" ng-if="vuln.correction_captures!=''">
                        Voir les captures
                    </a>
                  </p>
                </div>
              </td>
              <td>
                <span class="icon is-hoverable" ng-click="remove_vuln(vuln,$index)">
                  <i class="fas fa-times-circle has-text-black"></i>
                </span>
              </td>
            </tr>
          </tbody>
        </table>

    </div>
    <!-- Reports redaction -->
    <div class="step-content has-text-centered">
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Facebook account</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" name="facebook" id="facebook" type="text" placeholder="Facebook account url" autofocus data-validate="require">
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Twitter account</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" name="twitter" id="twitter" type="text" placeholder="Twitter account url" autofocus data-validate="require">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Last step validation -->
    <div class="step-content has-text-centered">
      <h1 class="title is-4">Your account is now created!</h1>
    </div>
  </div>
  <div class="steps-actions">
    <div class="steps-action">
      <a href="#" data-nav="previous" class="button is-light">Previous</a>
    </div>
    <div class="steps-action">
      <a href="#" data-nav="next" class="button is-light">Next</a>
    </div>
  </div>
</div>
<?= $this->element('Projects/modal_show_captures') ?>
<script>
!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.bulmaSteps=e():t.bulmaSteps=e()}("undefined"!=typeof self?self:this,function(){return function(n){var s={};function i(t){if(s[t])return s[t].exports;var e=s[t]={i:t,l:!1,exports:{}};return n[t].call(e.exports,e,e.exports,i),e.l=!0,e.exports}return i.m=n,i.c=s,i.d=function(t,e,n){i.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:n})},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="",i(i.s=0)}([function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=n(1),o=n(2),r=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var s in n)Object.prototype.hasOwnProperty.call(n,s)&&(t[s]=n[s])}return t},l=function(){function s(t,e){for(var n=0;n<e.length;n++){var s=e[n];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(t,s.key,s)}}return function(t,e,n){return e&&s(t.prototype,e),n&&s(t,n),t}}();var a=Symbol("onStepsPrevious"),u=Symbol("onStepsNext"),i=function(t){function i(t){var e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,i);var n=function(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e}(this,(i.__proto__||Object.getPrototypeOf(i)).call(this));if(n.element="string"==typeof t?document.querySelector(t):t,!n.element)throw new Error("An invalid selector or non-DOM node has been provided.");return n._clickEvents=["click"],n.options=r({},o.a,e),n[a]=n[a].bind(n),n[u]=n[u].bind(n),n.init(),n}return function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}(i,s["a"]),l(i,[{key:"init",value:function(){this._id="bulmaSteps"+(new Date).getTime()+Math.floor(Math.random()*Math.floor(9999)),this.steps=this.element.querySelectorAll(this.options.selector),this.contents=this.element.querySelectorAll(this.options.selector_content),this.previous_btn=this.element.querySelector(this.options.previous_selector),this.next_btn=this.element.querySelector(this.options.next_selector),[].forEach.call(this.steps,function(t,e){t.setAttribute("data-step-id",e)}),this.steps&&this.steps.length&&(this.activate_step(0),this.updateActions(this.steps[0])),this._bindEvents(),this.emit("bulmasteps:ready",this.element.value)}},{key:"_bindEvents",value:function(){var e=this;null!=this.previous_btn&&this._clickEvents.forEach(function(t){e.previous_btn.addEventListener(t,e[a],!1)}),null!=this.next_btn&&this._clickEvents.forEach(function(t){e.next_btn.addEventListener(t,e[u],!1)})}},{key:a,value:function(t){t.preventDefault(),t.target.getAttribute("disabled")||this.previous_step()}},{key:u,value:function(t){t.preventDefault(),t.target.getAttribute("disabled")||this.next_step()}},{key:"get_current_step_id",value:function(){for(var t=0;t<this.steps.length;t++){var e=this.steps[t];if(e.classList.contains(this.options.active_class))return parseInt(e.getAttribute("data-step-id"))}return null}},{key:"updateActions",value:function(t){var e=parseInt(t.getAttribute("data-step-id"));0==e?(null!=this.previous_btn&&this.previous_btn.setAttribute("disabled","disabled"),null!=this.next_btn&&this.next_btn.removeAttribute("disabled","disabled")):e==this.steps.length-1?(null!=this.previous_btn&&this.previous_btn.removeAttribute("disabled","disabled"),null!=this.next_btn&&this.next_btn.setAttribute("disabled","disabled")):(null!=this.previous_btn&&this.previous_btn.removeAttribute("disabled","disabled"),null!=this.next_btn&&this.next_btn.removeAttribute("disabled","disabled"))}},{key:"next_step",value:function(){var t=this.get_current_step_id();if(null!=t){var e=t+1,n=[];if(void 0!==this.options.beforeNext&&null!=this.options.beforeNext&&this.options.beforeNext&&(n=this.options.beforeNext(t)),this.emit("bulmasteps:before:next",t),void 0===n&&(n=[]),0<n.length){this.emit("bulmasteps:errors",n);for(var s=0;s<n.length;s++)void 0!==this.options.onError&&null!=this.options.onError&&this.options.onError&&this.options.onError(n[s])}else e>=this.steps.length?(void 0!==this.options.onFinish&&null!=this.options.onFinish&&this.options.onFinish&&this.options.onFinish(t),this.emit("bulmasteps:finish",t),this.deactivate_step(t)):(this.complete_step(t),this.activate_step(e))}}},{key:"previous_step",value:function(){var t=this.get_current_step_id();null!=t&&(this.uncomplete_step(t-1),this.activate_step(t-1))}},{key:"activate_step",value:function(t){this.updateActions(this.steps[t]);for(var e=0;e<this.steps.length;e++){this.steps[e]!=this.steps[t]&&this.deactivate_step(e)}this.steps[t].classList.add(this.options.active_class),void 0!==this.contents[t]&&this.contents[t].classList.add(this.options.active_class),void 0!==this.options.onShow&&null!=this.options.onShow&&this.options.onShow&&this.options.onShow(t),this.emit("bulmasteps:step:show",t)}},{key:"complete_step",value:function(t){this.steps[t].classList.add(this.options.completed_class),this.emit("bulmasteps:step:completed",t)}},{key:"uncomplete_step",value:function(t){this.steps[t].classList.remove(this.options.completed_class),this.emit("bulmasteps:step:uncompleted",t)}},{key:"deactivate_step",value:function(t){this.steps[t].classList.remove(this.options.active_class),void 0!==this.contents[t]&&this.contents[t].classList.remove(this.options.active_class)}}],[{key:"attach",value:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:".steps",e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},n=new Array,s=document.querySelectorAll(t);return[].forEach.call(s,function(t){setTimeout(function(){n.push(new i(t,e))},100)}),n}}]),i}();e.default=i},function(t,e,n){"use strict";var s=function(){function s(t,e){for(var n=0;n<e.length;n++){var s=e[n];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(t,s.key,s)}}return function(t,e,n){return e&&s(t.prototype,e),n&&s(t,n),t}}();var i=function(){function e(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:[];!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,e),this._listeners=new Map(t),this._middlewares=new Map}return s(e,[{key:"listenerCount",value:function(t){return this._listeners.has(t)?this._listeners.get(t).length:0}},{key:"removeListeners",value:function(){var e=this,t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:null,n=1<arguments.length&&void 0!==arguments[1]&&arguments[1];null!==t?Array.isArray(t)?name.forEach(function(t){return e.removeListeners(t,n)}):(this._listeners.delete(t),n&&this.removeMiddleware(t)):this._listeners=new Map}},{key:"middleware",value:function(t,e){var n=this;Array.isArray(t)?name.forEach(function(t){return n.middleware(t,e)}):(Array.isArray(this._middlewares.get(t))||this._middlewares.set(t,[]),this._middlewares.get(t).push(e))}},{key:"removeMiddleware",value:function(){var e=this,t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:null;null!==t?Array.isArray(t)?name.forEach(function(t){return e.removeMiddleware(t)}):this._middlewares.delete(t):this._middlewares=new Map}},{key:"on",value:function(t,e){var n=this,s=2<arguments.length&&void 0!==arguments[2]&&arguments[2];if(Array.isArray(t))t.forEach(function(t){return n.on(t,e)});else{var i=(t=t.toString()).split(/,|, | /);1<i.length?i.forEach(function(t){return n.on(t,e)}):(Array.isArray(this._listeners.get(t))||this._listeners.set(t,[]),this._listeners.get(t).push({once:s,callback:e}))}}},{key:"once",value:function(t,e){this.on(t,e,!0)}},{key:"emit",value:function(n,s){var i=this,o=2<arguments.length&&void 0!==arguments[2]&&arguments[2];n=n.toString();var r=this._listeners.get(n),l=null,a=0,u=o;if(Array.isArray(r))for(r.forEach(function(t,e){o||(l=i._middlewares.get(n),Array.isArray(l)?(l.forEach(function(t){t(s,function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:null;null!==t&&(s=t),a++},n)}),a>=l.length&&(u=!0)):u=!0),u&&(t.once&&(r[e]=null),t.callback(s))});-1!==r.indexOf(null);)r.splice(r.indexOf(null),1)}}]),e}();e.a=i},function(t,e,n){"use strict";e.a={selector:".step-item",selector_content:".step-content",previous_selector:'[data-nav="previous"]',next_selector:'[data-nav="next"]',active_class:"is-active",completed_class:"is-completed",beforeNext:null,onShow:null,onFinish:null,onError:null}}]).default});
</script>
<script>
          bulmaSteps.attach();
</script>