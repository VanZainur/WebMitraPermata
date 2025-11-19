<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ROUTE WEBSITE UTAMA
$routes->get('/', 'Home::index');
$routes->get('/profil', 'Home::profil');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/struktur', 'Home::struktur');
$routes->get('/fasilitas', 'Home::fasilitas');
$routes->get('/kemitraan', 'Home::kemitraan');
$routes->get('/kegiatan', 'Home::kegiatan');
$routes->get('/prestasi', 'Home::prestasi');
$routes->get('/berita', 'Home::berita');
$routes->get('/akademik', 'Home::akademik');

// ROUTE SMK (WEB DI DALAM WEB)
$routes->get('/smk', 'Smk::index');
$routes->get('/smk/about', 'Smk::about');
$routes->get('/smk/courses', 'Smk::courses');
$routes->get('/smk/kegiatan', 'Smk::kegiatan');
$routes->get('/smk/prestasi', 'Smk::prestasi');
$routes->get('/smk/berita', 'Smk::berita');
$routes->get('/smk/contact', 'Smk::contact');
$routes->get('/smk/404', 'Smk::notfound');

// ROUTE SMP (WEB DI DALAM WEB)
$routes->get('/smp', 'Smp::index');
$routes->get('/smp/about', 'Smp::about');
$routes->get('/smp/courses', 'Smp::courses');
$routes->get('/smp/kegiatan', 'Smp::kegiatan');
$routes->get('/smp/prestasi', 'Smp::prestasi');
$routes->get('/smp/berita', 'Smp::berita');
$routes->get('/smp/contact', 'Smp::contact');
$routes->get('/smp/404', 'Smp::notfound');

// ROUTE SD (WEB DI DALAM WEB)
$routes->get('/sd', 'Sd::index');
$routes->get('/sd/about', 'Sd::about');
$routes->get('/sd/courses', 'Sd::courses');
$routes->get('/sd/kegiatan', 'Sd::kegiatan');
$routes->get('/sd/prestasi', 'Sd::prestasi');
$routes->get('/sd/berita', 'Sd::berita');
$routes->get('/sd/contact', 'Sd::contact');
$routes->get('/sd/404', 'Sd::notfound');

// ROUTE TK (WEB DI DALAM WEB)
$routes->get('/tk', 'Tk::index');
$routes->get('/tk/about', 'Tk::about');
$routes->get('/tk/courses', 'Tk::courses');
$routes->get('/tk/kegiatan', 'Tk::kegiatan');
$routes->get('/tk/prestasi', 'Tk::prestasi');
$routes->get('/tk/berita', 'Tk::berita');
$routes->get('/tk/contact', 'Tk::contact');
$routes->get('/tk/404', 'Tk::notfound');
