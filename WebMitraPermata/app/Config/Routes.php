<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profil', 'Home::profil');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/struktur', 'Home::struktur'); // <= Tambah ini
$routes->get('/fasilitas', 'Home::fasilitas'); // <= Tambah ini
$routes->get('/kemitraan', 'Home::kemitraan'); // <= Tambah ini
$routes->get('/kegiatan', 'Home::kegiatan'); // <= Tambah ini
$routes->get('/prestasi', 'Home::prestasi'); // <= Tambah ini
$routes->get('/berita', 'Home::berita');
$routes->get('/akademik', 'Home::akademik');