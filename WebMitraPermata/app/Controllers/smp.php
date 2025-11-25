<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KegiatanModel;
use App\Models\PrestasiModel;

class Smp extends BaseController
{
    public function index()
    {
        $berita = (new BeritaModel())->where('jenjang', 'smp')->findAll();
        $kegiatan = (new KegiatanModel())->where('jenjang', 'smp')->findAll();
        $prestasi = (new PrestasiModel())->where('jenjang', 'smp')->findAll();

        return view('smp/index', [
            'berita' => $berita,
            'kegiatan' => $kegiatan,
            'prestasi' => $prestasi
        ]);
    }
}
