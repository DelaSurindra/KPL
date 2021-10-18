<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Beranda');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'BerandaController::index');

$routes->get('/aduan', 'AduanController::index');
$routes->post('/aduan/store', 'AduanController::store');

$routes->get('/data-kecamatan', 'KecamatanController::index');
$routes->get('/data-kecamatan/detail/(:num)', 'KecamatanController::detail/$1');
$routes->post('/data-kecamatan/update', 'KecamatanController::update');
$routes->get('/data-kecamatan/delete/(:num)/(:num)', 'KecamatanController::delete/$1/$2');

$routes->get('/laporan', 'LaporanController::index');
$routes->post('/laporan/store', 'LaporanController::store');

$routes->get('/legalitas', 'LegalitasController::index');

$routes->get('/logout', 'LoginController::logout');
$routes->get('/login', 'LoginController::index');
$routes->post('/login/auth', 'LoginController::auth');

$routes->get('/pendaftaran', 'PendaftaranController::index');
$routes->post('/pendaftaran/store', 'PendaftaranController::store');

$routes->get('/struktur-pegawai', 'ProfilController::index');
$routes->get('/skt', 'SKTController::index');
$routes->get('/tugas-fungsi', 'TujuanController::index');
$routes->get('/visi-misi', 'VisiMisiController::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
