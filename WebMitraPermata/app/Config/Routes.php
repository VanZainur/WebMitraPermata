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
$routes->get('/smk/team', 'Smk::team');
$routes->get('/smk/testimonial', 'Smk::testimonial');
$routes->get('/smk/contact', 'Smk::contact');
$routes->get('/smk/404', 'Smk::notfound');
