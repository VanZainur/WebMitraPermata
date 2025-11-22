<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class BeritaController extends BaseController
{
    protected $beritaModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }

    // Menampilkan semua berita
    public function index()
    {
        $data['berita'] = $this->beritaModel->findAll();
        
        return view('berita/list', $data);
    }

    // Menampilkan detail berita
    public function detail($id)
    {
        $data['berita'] = $this->beritaModel->find($id);
        
        if (!$data['berita']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan');
        }
        
        return view('smk/detail_berita', $data);
    }
}
