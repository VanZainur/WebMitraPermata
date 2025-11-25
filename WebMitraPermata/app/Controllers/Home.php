<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function profil()
    {
        return view('profil');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function struktur()
    {
        return view('struktur');
    }

    public function fasilitas()
    {
        return view('fasilitas');
    }

    public function kemitraan()
    {
        return view('kemitraan');
    }

    public function kegiatan()
    {
        return view('kegiatan');
    }

    public function prestasi()
    {
        return view('prestasi');
    }

    public function berita()
    {
        return view('berita');
    }

    public function akademik()
    {
        return view('akademik');
    }
}
