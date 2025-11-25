<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KegiatanModel;
use App\Models\PrestasiModel;

class Smk extends BaseController
{
    public function index()
    {
        $berita = (new BeritaModel())->where('jenjang', 'smk')->findAll();
        $kegiatan = (new KegiatanModel())->where('jenjang', 'smk')->findAll();
        $prestasi = (new PrestasiModel())->where('jenjang', 'smk')->findAll();

        return view('smk/index', [
            'berita' => $berita,
            'kegiatan' => $kegiatan,
            'prestasi' => $prestasi
        ]);
    }
}
