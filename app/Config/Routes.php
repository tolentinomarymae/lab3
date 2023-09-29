<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*$routes->get('/', 'Home::index');*/
$routes->get('/', 'MainController::index');
$routes->get('/shop', 'MainController::shop');
$routes->get('/admins', 'AdminController::admin');