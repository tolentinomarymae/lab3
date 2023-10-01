<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*$routes->get('/', 'Home::index');*/
$routes->get('/', 'MainController::index');
$routes->get('/shop', 'MainController::shop');
$routes->post('/products/store', 'MainController::store');
$routes->get('/products/:id', 'MainController@show');
$routes->match(['post', 'get'], '/admins', 'MainController::admin');
$routes->match(['post', 'get'], '/login', 'MainController::login');
$routes->match(['post', 'get'], '/register', 'MainController::register');