<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'SufardiWeb::beranda');
$routes->get('/login', 'SufardiWeb::login');
$routes->get('/features', 'SufardiWeb::features');
$routes->get('/dashboard', 'SufardiWeb::dashboard');
