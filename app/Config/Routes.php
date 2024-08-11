<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'sufardiWeb::beranda');
$routes->get('/course', 'sufardiWeb::features');
$routes->get('/materi/(:num)', 'sufardiWeb::showMateri/$1');
$routes->post('/tambahCourse/(:num)', 'sufardiWeb::tambahCourse/');
$routes->post('/tambahMateri', 'sufardiWeb::tambahMateri/$1');
$routes->get('/course/materi/(:num)', 'sufardiWeb::lihatmateri/$1');
$routes->get('/dashboard', 'sufardiWeb::dashboard');
$routes->post('/sufardiWeb/editMateri/(:num)', 'sufardiWeb::editMateri/$1');

// $routes->delete('/materi/deleteMateri/', 'sufardiWeb::deleteMateri/');