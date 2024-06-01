<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
$routes->get('/produk', 'produkController::index');
$routes->get('/barangMasuk', 'masukController::index');
$routes->get('/barangKeluar', 'keluarController::index');
