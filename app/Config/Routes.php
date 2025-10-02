<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::index');
$routes->get('/login', 'Admin::index');

$routes->post('/masuk', 'Admin::login');
$routes->get('/dashboard', 'Admin::dashboard');
$routes->get('/logout', 'Admin::logout');

$routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'role:superadmin,admin'], function($routes) {
    $routes->get('/pelatihan', 'Admin::pelatihan');
    $routes->get('posting/create', 'Posting::create');
    $routes->get('posting/data', 'Posting::data');
    $routes->post('posting/store', 'Posting::store');
    $routes->get('posting/edit/(:num)', 'Posting::edit/$1');
    $routes->post('posting/update/(:num)', 'Posting::update/$1');
    $routes->post('posting/delete/(:num)', 'Posting::delete/$1');
    $routes->post('posting/deleteThumbnail/(:num)', 'Posting::deleteThumbnail/$1');
    $routes->post('posting/uploadImage', 'Posting::uploadImage');

});

