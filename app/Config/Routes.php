<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setDefaultNamespace('App\Controllers\Admin');
// $routes->setDefaultController('Produk');
// $routes->setDefaultMethod('homepage');
// $routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);



/**
 * --------------------------------------------------------------------
 * Auth Routes
 * --------------------------------------------------------------------
 */

$routes->match(['get', 'post'], 'login', 'Auth::login'); // LOGIN PAGE
$routes->match(['get', 'post'], 'register', 'Auth::register'); // REGISTER PAGE
$routes->match(['get', 'post'], 'forgotpassword', 'Auth::forgotPassword'); // FORGOT PASSWORD
$routes->match(['get', 'post'], 'activate/(:num)/(:any)', 'Auth::activateUser/$1/$2'); // INCOMING ACTIVATION TOKEN FROM EMAIL
$routes->match(['get', 'post'], 'resetpassword/(:num)/(:any)', 'Auth::resetPassword/$1/$2'); // INCOMING RESET TOKEN FROM EMAIL
$routes->match(['get', 'post'], 'updatepassword/(:num)', 'Auth::updatepassword/$1'); // UPDATE PASSWORD
$routes->match(['get', 'post'], 'lockscreen', 'Auth::lockscreen'); // LOCK SCREEN
$routes->get('logout', 'Auth::logout'); // LOGOUT


// $routes->post('produk_homepage', 'Admin\Produk::homepage');
$routes->get('/', 'Admin\Produk::homepage');
//$routes->get('bakul/add', 'Admin\Bakul::add');
$routes->get('bakul', 'Admin\Bakul::index');

$routes->get('checkout', 'Admin\Checkout::index');
$routes->post('checkout','Admin\Checkout::process_checkout');

$routes->post('checkout/redirect/(:any)', 'Admin\Checkout::redirect/$1');
// $routes->post('checkout/redirect/securepay', 'Admin\Checkout::redirect/securepay');
// $routes->post('checkout/redirect/(:segment)', 'Admin\Checkout::redirect/$1');

$routes->get('checkout/thankyou', 'Admin\Checkout::thankyou');
$routes->get('checkout/thankyou/(:any)', 'Admin\Checkout::thankyou/$1');

$routes->post('bakul/add','Admin\Bakul::add');

$routes->post('bakul/update','Admin\Bakul::update');

$routes->post('bakul/remove','Admin\Bakul::remove');

$routes->get('bakul/remove/(:num)', 'Admin\Bakul::remove/$1');
  


// $routes->get('produk_homepage', 'Admin\Produk::homepage');


/**
 * --------------------------------------------------------------------
 * SUPER ADMIN ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '1'
 * --------------------------------------------------------------------
 */

 $routes->group('', ['filter' => 'auth:Role,1'], function ($routes) {

	$routes->get('superadmin', 'superadmin::index'); // SUPER ADMIN DASHBOARD
	$routes->match(['get', 'post'], 'superadmin/profile', 'Auth::profile'); 
    
    //gambar
    $routes->get('gambar', 'Admin\Gambar::index');

    $routes->get('gambar/edit/(:num)', 'Admin\Gambar::edit/$1');

    $routes->get('gambar/delete/(:num)', 'Admin\Gambar::delete/$1');

    $routes->get('gambar/add', 'Admin\Gambar::add');

    $routes->post('gambar/add', 'Admin\Gambar::save_new');

    $routes->post('gambar/edit/(:num)', 'Admin\Gambar::save_edit/$1');

    
    //produk
    $routes->get('produk', 'Admin\Produk::index');

    $routes->get('produk/edit/(:num)', 'Admin\Produk::edit/$1');
    
    $routes->get('produk/delete/(:num)', 'Admin\Produk::delete/$1');
    
    $routes->get('produk/add', 'Admin\Produk::add');
    
    $routes->post('produk/add', 'Admin\Produk::save_new');
    
    $routes->post('produk/edit/(:num)', 'Admin\Produk::save_edit/$1');
    
    $routes->post('bakul/remove','Admin\Bakul::remove');


    
    //kategori
    $routes->get('kategori', 'Admin\Kategori::index');
    $routes->get('kategori/add','Admin\Kategori::add');
    $routes->post('kategori/add', 'Admin\Kategori::save_new');
    $routes->get('kategori/edit/(:num)', 'Admin\Kategori::edit/$1');
    $routes->get('kategori/delete/(:num)', 'Admin\Kategori::delete/$1');
    $routes->post('kategori/edit/(:num)', 'Admin\Kategori::save_edit/$1');

    
});


/**
 * --------------------------------------------------------------------
 * ADMIN ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '2'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,2'], function ($routes){

	$routes->get('dashboard', 'Dashboard::index'); // ADMIN DASHBOARD
	$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
});

