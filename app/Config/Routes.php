<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*$routes->get('/', 'Home::index');*/
$routes->get('/', 'MainController::index');
$routes->get('/shop', 'MainController::shop');
$routes->post('/authreg', 'AdminController::authreg');
$routes->post('/loginauth', 'AdminController::loginauth');
$routes->post('/products/store', 'MainController::store');
$routes->get('/products/:id', 'MainController@show');
$routes->match(['post', 'get'], '/admins', 'AdminController::admin');
$routes->match(['post', 'get'], '/login', 'AdminController::login');
$routes->match(['post', 'get'], '/register', 'AdminController::register');