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
    // $routes->fallbacks(DashedRoute::class);
});

Router::scope('/views', function (RouteBuilder $routes) {
    $routes->connect('/dashboard', ['controller' => 'Views', 'action' => 'dashboard']);
    // $routes->fallbacks(DashedRoute::class);
});


Router::scope('/stats', function (RouteBuilder $routes){
    $routes->connect('/top-service-base', ['controller' => 'Stats', 'action' => 'topServiceBase']);
    $routes->connect('/all-service-transactions', ['controller' => 'Stats', 'action' => 'allServiceTransactions']);
    $routes->connect('/top-zone', ['controller' => 'Stats', 'action' => 'topZone']);
    $routes->connect('/quick-parc', ['controller' => 'Stats', 'action' => 'quickParc']);
    $routes->connect('/quick-traffic', ['controller' => 'Stats', 'action' => 'quickTraffic']);
    $routes->connect('/quick-reload', ['controller' => 'Stats', 'action' => 'quickReload']);
    $routes->connect('/quick-ca', ['controller' => 'Stats', 'action' => 'quickCa']);

    // $routes->fallbacks(DashedRoute::class);
});
