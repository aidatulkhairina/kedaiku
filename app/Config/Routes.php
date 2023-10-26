<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('dashboard', 'Admin\Dashboard::index');

$routes->get('dashboard/cuba', 'Admin\Dashboard::cuba');

$routes->get('gambar', 'Admin\Gambar::index');

$routes->get('gambar/edit/(:num)', 'Admin\Gambar::edit/$1');

$routes->get('gambar/delete/(:num)', 'Admin\Gambar::delete/$1');


