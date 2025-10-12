<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home'); // app/Views/home.php
    }

    public function profil(): string
    {
        return view('profil'); // app/Views/profil.php
    }

    public function kontak(): string
    {
        return view('kontak'); // app/Views/kontak.php
    }

        public function struktur(): string
    {
        return view('struktur'); // app/Views/struktur.php
    }

    public function fasilitas(): string
    {
        return view('fasilitas'); // app/Views/struktur.php
    }


    public function kemitraan(): string
    {
        return view('kemitraan'); // app/Views/struktur.php
    }

    public function kegiatan(): string
    {
        return view('kegiatan'); // app/Views/struktur.php
    }

     public function prestasi(): string
    {
        return view('prestasi'); // app/Views/struktur.php
    }

    public function berita(): string
    {
        return view('berita'); // app/Views/berita.php
    }
}

