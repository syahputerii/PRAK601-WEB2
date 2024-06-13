<?php

namespace Config;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('/buku', 'BukuController::index');
$routes->get('/buku/create', 'BukuController::create');
$routes->post('/buku/create', 'BukuController::store');
$routes->get('/buku/(:num)/edit', 'BukuController::edit/$1');
$routes->post('/buku/(:num)/edit', 'BukuController::update/$1');
$routes->delete('/buku/(:num)/delete', 'BukuController::delete/$1');

$routes->get('/login', 'UserController::index');

$routes->get('/register', 'RegisterController::index');
$routes->post('/register', 'RegisterController::store');

$routes->post('/login', 'UserController::login');
$routes->get('/logout', 'UserController::logout');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}