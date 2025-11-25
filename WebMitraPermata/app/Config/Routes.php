<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// --------------------------------------------------------------------
// Route Definitions
// --------------------------------------------------------------------

// Default Route - Halaman Utama
$routes->get('/', 'Home::index');

// --------------------------------------------------------------------
// Routes untuk Menu Umum
// --------------------------------------------------------------------
$routes->get('/profil', 'Home::profil');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/struktur', 'Home::struktur');
$routes->get('/fasilitas', 'Home::fasilitas');
$routes->get('/kemitraan', 'Home::kemitraan');
$routes->get('/kegiatan', 'Home::kegiatan');
$routes->get('/prestasi', 'Home::prestasi');
$routes->get('/berita', 'Home::berita');
$routes->get('/akademik', 'Home::akademik');

// --------------------------------------------------------------------
// Routes untuk Halaman SMK dan SMP
// --------------------------------------------------------------------
$routes->get('/smk', 'Home::SMK');
$routes->get('/smp', 'Home::SMP');
$routes->get('/sd', 'Home::sd');
$routes->get('/tk', 'Home::tk');
$routes->get('tk2', 'TK2::index');//buat tk2

// --------------------------------------------------------------------
// Routes untuk Berita
// --------------------------------------------------------------------
// Detail Berita (dengan parameter ID)
$routes->get('/berita/detail/(:num)', 'BeritaController::detail/$1');
$routes->get('/kegiatan/detail/(:num)', 'KegiatanController::detail/$1');


// Jika ingin menampilkan semua berita di halaman khusus
$routes->get('/berita/all', 'BeritaController::index');


// Routes untuk Prestasi
$routes->get('/prestasi/detail/(:num)', 'PrestasiController::detail/$1');
$routes->get('/prestasi/all', 'PrestasiController::index');

// --------------------------------------------------------------------
// Routes untuk Admin (jika diperlukan nanti)
// --------------------------------------------------------------------
// $routes->group('admin', function($routes) {
//     $routes->get('dashboard', 'Admin::dashboard');
//     $routes->get('berita', 'Admin::berita');
//     $routes->get('berita/tambah', 'Admin::tambahBerita');
//     $routes->post('berita/simpan', 'Admin::simpanBerita');
//     $routes->get('berita/edit/(:num)', 'Admin::editBerita/$1');
//     $routes->post('berita/update/(:num)', 'Admin::updateBerita/$1');
//     $routes->get('berita/hapus/(:num)', 'Admin::hapusBerita/$1');
// });

// Route untuk Admin Dashboard
$routes->get('admin', 'Admin::index');
$routes->get('admin/dashboard', 'Admin::index');

// API Routes untuk Admin (untuk fetch data dari database)
$routes->get('admin/api/pendaftaran', 'Admin::getPendaftaran');
$routes->get('admin/api/pendaftaran/(:segment)', 'Admin::getPendaftaran/$1');
// --------------------------------------------------------------------
// Additional Routes
// --------------------------------------------------------------------

/*
 * --------------------------------------------------------------------
 * Route untuk Error 404
 * --------------------------------------------------------------------
 */
$routes->set404Override(function() {
    echo view('errors/html/error_404');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 */
// Jika Anda ingin menggunakan auto-routing (tidak direkomendasikan)
// $routes->setAutoRoute(true);