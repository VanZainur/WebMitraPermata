<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// ===========================
// ROUTE LANDING / HOME
// ===========================
$routes->get('/', 'Home::index');

  // Route untuk serve uploaded files
$routes->get('uploads/(:segment)/(:segment)/(:segment)', 'FileController::serve/$1/$2/$3');

// ===========================
// ROUTE HALAMAN NAVBAR
// ===========================
$routes->get('/profil', 'Home::profil');
$routes->get('/struktur', 'Home::struktur');
$routes->get('/fasilitas', 'Home::fasilitas');
$routes->get('/kemitraan', 'Home::kemitraan');
$routes->get('/kegiatan', 'Home::kegiatan');
$routes->get('/prestasi', 'Home::prestasi');
$routes->get('/berita', 'Home::berita');
$routes->get('/akademik', 'Home::akademik');
$routes->get('/kontak', 'Home::kontak');

// ===========================
// ROUTE JENJANG PENDIDIKAN
// ===========================
$routes->get('/smk', 'Smk::index');
$routes->get('/smp', 'Smp::index');
$routes->get('/sd', 'Sd::index');
$routes->get('/tk', 'Tk::index');
$routes->get('/tk2', 'Tk2::index');

// ===========================
// ROUTE FORM PENDAFTARAN (AJAX POP-UP)
// ===========================
$routes->post('/pendaftaran/submit/(:segment)', 'Pendaftaran::submit/$1');

// ===========================
// LOGIN ADMIN
// ===========================
$routes->get('/admin/login', 'Auth::login');
$routes->post('/admin/login/process', 'Auth::loginProcess');
$routes->get('/admin/logout', 'Auth::logout');

// ===========================
// ADMIN (HARUS LOGIN)
// ===========================
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    
    $routes->get('/', 'Admin::index');
    
    // PENDAFTARAN
    $routes->get('pendaftaran', 'Admin::pendaftaranList');
    $routes->get('api/pendaftaran', 'Admin::getPendaftaran');

    // BERITA
    $routes->get('berita', 'Admin::berita');
    $routes->get('berita/create', 'Admin::beritaCreate');
    $routes->post('berita/store', 'Admin::beritaStore');
    $routes->get('berita/edit/(:num)', 'Admin::beritaEdit/$1');
    $routes->post('berita/update/(:num)', 'Admin::beritaUpdate/$1');
    $routes->get('berita/delete/(:num)', 'Admin::beritaDelete/$1');

    // KEGIATAN
    $routes->get('kegiatan', 'Admin::kegiatan');
    $routes->get('kegiatan/create', 'Admin::kegiatanCreate');
    $routes->post('kegiatan/store', 'Admin::kegiatanStore');
    $routes->get('kegiatan/edit/(:num)', 'Admin::kegiatanEdit/$1');
    $routes->post('kegiatan/update/(:num)', 'Admin::kegiatanUpdate/$1');
    $routes->get('kegiatan/delete/(:num)', 'Admin::kegiatanDelete/$1');

    // PRESTASI
    $routes->get('prestasi', 'Admin::prestasi');
    $routes->get('prestasi/create', 'Admin::prestasiCreate');
    $routes->post('prestasi/store', 'Admin::prestasiStore');
    $routes->get('prestasi/edit/(:num)', 'Admin::prestasiEdit/$1');
    $routes->post('prestasi/update/(:num)', 'Admin::prestasiUpdate/$1');
    $routes->get('prestasi/delete/(:num)', 'Admin::prestasiDelete/$1');

    // EXPORT FILE
    $routes->get('export-excel', 'Admin::exportExcel');
    $routes->get('export-pdf', 'Admin::exportPdf');

  
});
