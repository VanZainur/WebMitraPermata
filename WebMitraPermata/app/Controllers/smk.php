<?php

namespace App\Controllers;

class Smk extends BaseController
{
    public function __construct()
    {
        helper(['url']); // Load URL helper
    }

    public function index()
    {
        return view('smk/index');
    }

    public function about()
    {
        return view('smk/about');
    }

    public function courses()
    {
        return view('smk/courses');
    }

    public function kegiatan()
    {
        return view('smk/kegiatan');
    }

    public function prestasi()
    {
        return view('smk/prestasi');
    }

     public function berita()
    {
        return view('smk/berita');
    }

    public function notfound()
    {
        return view('smk/404');
    }

    public function contact()
    {
        return view('smk/contact');
    }
}