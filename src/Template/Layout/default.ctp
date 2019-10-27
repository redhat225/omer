<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please   see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$pageDescription = "DATAPROTECT-Security Project";?>

<!DOCTYPE html>

<html style="overflow-y: auto;font-size:0.82rem;">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $pageDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('favicon.png','/img/favicon.png',['type'=>'icon']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->Html->css('../node_modules/bulma/custom_bulma') ?>
    <?= $this->Html->css('../node_modules/bulma-extensions/dist/bulma-extensions.min') ?>
    <?= $this->Html->css('../node_modules/bulma-extensions/bulma-quickview/dist/bulma-quickview.min') ?>
    <?= $this->Html->css('fa/css/font-awesome.min.css') ?>

    <?= $this->Html->css('main') ?>

    <!-- Another Css -->
    <?= $this->Html->css('../node_modules/toastr/build/toastr.min') ?>
    <?= $this->Html->css('loading-bar-custom') ?>

    <?= $this->fetch('css') ?>

    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('../node_modules/tinymce/tinymce.js') ?>

    <?= $this->Html->script('../node_modules/angular/angular.min') ?>
    <!-- Tiny Mce -->
    <?= $this->Html->script('../node_modules/angular-ui-tinymce/src/tinymce.js') ?>
    <!-- Angular touch and router -->
    <?= $this->Html->script('../node_modules/angular-touch/angular-touch.min') ?>
    <?= $this->Html->script('../node_modules/@uirouter/angularjs/release/angular-ui-router.min') ?>
    <!-- Another Scripts -->
    <?= $this->Html->script('../node_modules/toastr/build/toastr.min') ?>
    <?= $this->Html->script('../node_modules/ng-file-upload/dist/ng-file-upload-all.min') ?>
    <?= $this->Html->script('../node_modules/angular-loading-bar/src/loading-bar') ?>
    <?= $this->Html->script('../node_modules/angular-colorbox/js/angular-colorbox') ?>
    <?= $this->Html->script('../node_modules/chart.js/dist/Chart.min') ?>
    <?= $this->Html->script('../node_modules/angular-chart.js/dist/angular-chart.min') ?>
    <?= $this->Html->script('../node_modules/angular-loading-bar/src/loading-bar') ?>
    <?= $this->Html->script('../node_modules/angular-file-saver/dist/angular-file-saver.bundle') ?>
    <?= $this->Html->script('../node_modules/bulma-extensions/bulma-quickview/dist/bulma-quickview.min') ?>
    
    <base href="/admins/">
</head>
<body ng-app="eben">
    <section ui-view></section>
    <!-- Angular app goes here -->
    <?= $this->Html->script('app') ?>
    <?= $this->Html->script('controllers') ?>
    <?= $this->Html->script('services') ?>

    <!-- Bulma extensions -->
    <?= $this->fetch('script') ?>
</body>
</html>
