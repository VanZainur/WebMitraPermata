<?php

namespace App\Controllers;

class Smp extends BaseController
{
    public function __construct()
    {
        helper(['url']); // Load URL helper
    }

    public function index()
    {
        return view('smp/index');
    }

    public function about()
    {
        return view('smp/about');
    }

    public function courses()
    {
        return view('smp/courses');
    }

    public function kegiatan()
    {
        return view('smp/kegiatan');
    }

    public function prestasi()
    {
        return view('smp/prestasi');
    }

     public function berita()
    {
        return view('smp/berita');
    }

    public function notfound()
    {
        return view('smp/404');
    }

    public function contact()
    {
        return view('smp/contact');
    }
}