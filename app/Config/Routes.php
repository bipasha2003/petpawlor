<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('/services', 'ServiceController::index');

$routes->get('/services/create', 'ServiceController::create');