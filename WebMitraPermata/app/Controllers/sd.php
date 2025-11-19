<?php

namespace App\Controllers;

class Sd extends BaseController
{
    public function __construct()
    {
        helper(['url']); // Load URL helper
    }

    public function index()
    {
        return view('sd/index');
    }

    public function about()
    {
        return view('sd/about');
    }

    public function courses()
    {
        return view('sd/courses');
    }

    public function kegiatan()
    {
        return view('sd/kegiatan');
    }

    public function prestasi()
    {
        return view('sd/prestasi');
    }

     public function berita()
    {
        return view('sd/berita');
    }

    public function notfound()
    {
        return view('sd/404');
    }

    public function contact()
    {
        return view('sd/contact');
    }
}