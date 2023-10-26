<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('dashboard', 'Admin\Dashboard::index');

$routes->get('dashboard/cuba', 'Admin\Dashboard::cuba');