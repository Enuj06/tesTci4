<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/attendance', 'StudentController::Enuj06');
$routes->get('/attendance/(:any)', 'StudentController::attendance/$1');