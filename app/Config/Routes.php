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
$routes->get('/products/:id', 'MainController@show');
$routes->match(['post', 'get'], '/admins', 'AdminController::admin',['filter'=>'authGuard']);
$routes->match(['post', 'get'], '/login', 'AdminController::login');
$routes->match(['post', 'get'], '/register', 'AdminController::register');
$routes->get('/products/add', 'MainController::add');
$routes->post('/product', 'MainController::store');
// Routes.php

$routes->get('/products/edit/(:num)', 'MainController::edit/$1');
$routes->post('/products/update', 'MainController::update');
$routes->post('admins/delete/(:num)', 'MainController::deleteProduct/$1');


