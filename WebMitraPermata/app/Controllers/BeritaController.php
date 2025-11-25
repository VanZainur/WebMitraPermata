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

    // Menampilkan berita berdasarkan jenjang
    public function index($jenjang)
    {
        // Validasi jenjang
        $allowed = ['smk', 'smp', 'sd', 'tk'];
        if (!in_array($jenjang, $allowed)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Jenjang tidak valid");
        }

        $data['jenjang'] = $jenjang;

        // Filter berdasarkan jenjang
        $data['berita'] = $this->beritaModel
            ->where('jenjang', $jenjang)
            ->orderBy('tanggal', 'DESC')
            ->findAll();

        return view("$jenjang/berita_list", $data);
    }

    // Menampilkan detail berita
    public function detail($jenjang, $id)
    {
        // Ambil berita berdasarkan id + jenjang
        $data['berita'] = $this->beritaModel
            ->where('id', $id)
            ->where('jenjang', $jenjang)
            ->first();

        if (!$data['berita']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan');
        }

        return view("$jenjang/detail_berita", $data);
    }
}
