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
$routes->get('user', 'DashboardController::index', ['filter' => 'role:user']);

$routes->get('produk', 'ProdukController::index', ['filter' => 'auth']);
$routes->get('pelanggan', 'PelangganController::index', ['filter' => 'auth']);

$routes->get('keranjang', 'KeranjangController::index', ['filter' => 'auth']);
$routes->get('transaksi', 'TransaksiController::index', ['filter' => 'auth']);

