<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // Tampilkan halaman dashboard
        return view('admin/dashboard');
    }
}