<?php

namespace App\Controllers;

class Tk extends BaseController
{
    public function __construct()
    {
        helper(['url']); // Load URL helper
    }

    public function index()
    {
        return view('tk/index');
    }

    public function about()
    {
        return view('tk/about');
    }

    public function courses()
    {
        return view('tk/courses');
    }

    public function kegiatan()
    {
        return view('tk/kegiatan');
    }

    public function prestasi()
    {
        return view('tk/prestasi');
    }

     public function berita()
    {
        return view('tk/berita');
    }

    public function notfound()
    {
        return view('tk/404');
    }

    public function contact()
    {
        return view('tk/contact');
    }
}