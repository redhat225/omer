<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;
use Cake\Http\Middleware\CsrfProtectionMiddleware;
/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);
Router::extensions(['json','xml','pdf']);
Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);
    $routes->connect('/login', ['controller' => 'Home', 'action' => 'login']);
});


Router::scope('/admins', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Admins', 'action' => 'index']);
    $routes->connect('/dashboard', ['controller' => 'Admins', 'action' => 'index']);
    $routes->connect('/login', ['controller' => 'Admins', 'action' => 'login']);
    $routes->connect('/logout', ['controller' => 'Admins', 'action' => 'logout']);
    // Spas for projects
    $routes->connect('/projects/view', ['controller' => 'Admins', 'action' => 'index']);
    $routes->connect('/projects/add', ['controller' => 'Admins', 'action' => 'index']);
    $routes->connect('/projects/edit/:project_id', ['controller' => 'Admins', 'action' => 'index']);
    $routes->connect('/projects/write/:project_id', ['controller' => 'Admins', 'action' => 'index']);
    // spas for accounts
    $routes->connect('/accounts/view', ['controller' => 'Admins', 'action' => 'index']);
    $routes->connect('/accounts/add', ['controller' => 'Admins', 'action' => 'index']);
    $routes->connect('/accounts/edit/:user_id', ['controller' => 'Admins', 'action' => 'index']);
    // spas for profile
    $routes->connect('/profiles/edit', ['controller' => 'Admins', 'action' => 'index']);
    $routes->connect('/tour', ['controller' => 'Admins', 'action' => 'tour']);
    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/views', function (RouteBuilder $routes) {
    $routes->connect('/dashboard', ['controller' => 'Views', 'action' => 'dashboard']);
    // $routes->fallbacks(DashedRoute::class);
});

Router::scope('/sheet', function (RouteBuilder $routes){
    $routes->connect('/corrections/:vuln_id', ['controller' => 'Sheet', 'action' => 'corrections']);
    // $routes->fallbacks(DashedRoute::class);
});

Router::scope('/projects', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Projects', 'action' => 'index']);
    $routes->connect('/add',['controller' => 'Projects', 'action' => 'add']);
    $routes->connect('/all',['controller' => 'Projects', 'action' => 'all']);
    $routes->connect('/edit',['controller' => 'Projects', 'action' => 'edit']);
    $routes->connect('/load',['controller' => 'Projects', 'action' => 'load']);
    $routes->connect('/write',['controller' => 'Projects', 'action' => 'write']);
    $routes->connect('/view',['controller' => 'Projects', 'action' => 'view']);
    $routes->connect('/close',['controller' => 'Projects', 'action' => 'close']);
    // $routes->fallbacks(DashedRoute::class);
});

Router::scope('/profiles', function (RouteBuilder $routes){
    $routes->connect('/', ['controller' => 'Profiles', 'action' => 'index']);
    $routes->connect('/all', ['controller' => 'Profiles', 'action' => 'all']);
    $routes->connect('/edit', ['controller' => 'Profiles', 'action' => 'edit']);
    $routes->connect('/get', ['controller' => 'Profiles', 'action' => 'get']);
    // $routes->fallbacks(DashedRoute::class);
});

Router::scope('/tiny', function (RouteBuilder $routes) {
    $routes->connect('/upload', ['controller' => 'Tiny', 'action' => 'upload']);
});

Router::scope('/accounts', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Accounts', 'action' => 'index']);
    $routes->connect('/view', ['controller' => 'Accounts', 'action' => 'view']);
    $routes->connect('/edit', ['controller' => 'Accounts', 'action' => 'edit']);
    $routes->connect('/get', ['controller' => 'Accounts', 'action' => 'get']);
    $routes->connect('/renew', ['controller' => 'Accounts', 'action' => 'renew']);
    $routes->connect('/unlock', ['controller' => 'Accounts', 'action' => 'unlock']);
});

Router::scope('/project_deliverables', function (RouteBuilder $routes) {
    $routes->connect('/add', ['controller' => 'ProjectDeliverables', 'action' => 'add']);
    $routes->connect('/download/:file', ['controller' => 'ProjectDeliverables', 'action' => 'download']);
});

Router::scope('/project_accompaniments', function (RouteBuilder $routes) {
    $routes->connect('/add', ['controller' => 'ProjectAccompaniments', 'action' => 'create']);
    $routes->connect('/update', ['controller' => 'ProjectAccompaniments', 'action' => 'update']);
});

Router::scope('/project_vulnerabilities', function (RouteBuilder $routes) {
    $routes->connect('/add', ['controller' => 'ProjectVulnerabilities', 'action' => 'add']);
    $routes->connect('/update', ['controller' => 'ProjectVulnerabilities', 'action' => 'update']);
});

Router::scope('/project_plannings', function (RouteBuilder $routes) {
    $routes->connect('/update', ['controller' => 'ProjectPlannings', 'action' => 'update']);
});


Router::scope('/registers', function (RouteBuilder $routes) {
    $routes->connect('/retrieve', ['controller' => 'Registers', 'action' => 'retrieve']);
    $routes->connect('/retrieve-countries-and-cities', ['controller' => 'Registers', 'action' => 'retrieveCountriesAndCities']);
    $routes->get('/resource/:resource_label', ['controller' => 'Registers', 'action'=>'resource']);
});
Router::scope('/accounts', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Accounts', 'action' => 'index']);
    $routes->connect('/add', ['controller' => 'Accounts', 'action' => 'add']);
});

Router::scope('/users', function (RouteBuilder $routes) {
    $routes->connect('/all', ['controller' => 'Users', 'action' => 'all']);
});

Router::scope('/role-accounts', function (RouteBuilder $routes){
    $routes->connect('/all', ['controller' => 'RoleAccounts', 'action' => 'all']);
});


Router::scope('/stats', function (RouteBuilder $routes){
    $routes->connect('/global', ['controller' => 'Stats', 'action' => 'globalStats']);
    // $routes->fallbacks(DashedRoute::class);
});
