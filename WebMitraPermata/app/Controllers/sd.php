<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KegiatanModel;
use App\Models\PrestasiModel;

class Sd extends BaseController
{
    public function index()
    {
        $berita = (new BeritaModel())->where('jenjang', 'sd')->findAll();
        $kegiatan = (new KegiatanModel())->where('jenjang', 'sd')->findAll();
        $prestasi = (new PrestasiModel())->where('jenjang', 'sd')->findAll();

        return view('sd/index', [
            'berita' => $berita,
            'kegiatan' => $kegiatan,
            'prestasi' => $prestasi
        ]);
    }
}
