<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\Dashboard::index');

$routes->get('dashboard', 'Admin\Dashboard::index');

$routes->get('dashboard/cuba', 'Admin\Dashboard::cuba');

$routes->get('gambar', 'Admin\Gambar::index');

$routes->get('gambar/edit/(:num)', 'Admin\Gambar::edit/$1');

$routes->get('gambar/delete/(:num)', 'Admin\Gambar::delete/$1');

$routes->get('gambar/add', 'Admin\Gambar::add');

$routes->post('gambar/add', 'Admin\Gambar::save_new');

$routes->post('gambar/edit/(:num)', 'Admin\Gambar::save_edit/$1');

