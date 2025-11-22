<?php

namespace App\Controllers;

use App\Models\PrestasiModel;

class PrestasiController extends BaseController
{
    protected $prestasiModel;

    public function __construct()
    {
        $this->prestasiModel = new PrestasiModel();
    }

    // Menampilkan semua prestasi
    public function index()
    {
        $data['prestasi'] = $this->prestasiModel->findAll();
        return view('prestasi/list', $data);
    }

    // Menampilkan detail prestasi
    public function detail($id)
    {
        $data['prestasi'] = $this->prestasiModel->find($id);
        
        if (!$data['prestasi']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Prestasi tidak ditemukan');
        }
        
        return view('prestasi/detail', $data);
    }
}