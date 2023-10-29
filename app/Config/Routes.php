<?php

use App\Controllers\Auth\LoginController;
use App\Controllers\DashboardController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', [LoginController::class, 'index']);
$routes->get('/', [DashboardController::class, 'index']);
$routes->get('a', [DashboardController::class, 'a']);

service('auth')->routes($routes);
