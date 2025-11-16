<?php

namespace App\Controllers;

class Smk extends BaseController
{
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

    public function team()
    {
        return view('smk/team');
    }

    public function testimonial()
    {
        return view('smk/testimonial');
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
