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
// ROUTE LANDING / MENU
// ===========================
$routes->get('/', 'Home::index');
$routes->get('/smk', 'Smk::index');
$routes->get('/smp', 'Smp::index');
$routes->get('/sd', 'Sd::index');
$routes->get('/tk', 'Tk::index');

// ===========================
// ROUTE FORM PENDAFTARAN (AJAX POP-UP)
// ===========================
$routes->post('/pendaftaran/submit/(:segment)', 'Pendaftaran::submit/$1');

// ===========================
// LOGIN ADMIN
// ===========================
$routes->get('/admin/login', 'Auth::login');
$routes->post('/admin/login/process', 'Auth::loginProcess');
$routes->get('/admin/logout', 'Auth::logout'); // ✅ Pastikan ada ini

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

    // PRESTASI
    $routes->get('prestasi', 'Admin::prestasi');
});
