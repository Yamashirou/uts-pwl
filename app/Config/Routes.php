<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'DashboardController::index', ['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');
$routes->get('genpass', 'AuthController::generatepassword');

$routes->get('admin', 'DashboardController::index', ['filter' => 'role:admin']);
$routes->get('guest', 'DashboardController::index', ['filter' => 'role:guest']);

$routes->group('produk', ['filter' => 'auth'], function ($routes) { 
    $routes->get('', 'ProdukController::index');
    $routes->post('', 'ProdukController::create');
    $routes->post('edit/(:any)', 'ProdukController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukController::delete/$1');
});

$routes->get('pelanggan', 'PelangganController::index', ['filter' => 'auth']);

$routes->get('keranjang', 'KeranjangController::index', ['filter' => 'auth']);
$routes->get('transaksi', 'TransaksiController::index', ['filter' => 'auth']);

