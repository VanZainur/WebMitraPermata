<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KegiatanModel;
use App\Models\PrestasiModel;
use App\Models\GuruModel;

class Sd extends BaseController
{
    public function index()
    {
        // AMBIL DATA
        $berita     = (new BeritaModel())->where('jenjang', 'sd')->orderBy('tanggal', 'DESC')->findAll();
        $kegiatan   = (new KegiatanModel())->where('jenjang', 'sd')->orderBy('tanggal', 'DESC')->findAll();
        $prestasi   = (new PrestasiModel())->where('jenjang', 'sd')->orderBy('tanggal', 'DESC')->findAll();
        $guru       = (new GuruModel())->where('jenjang', 'sd')->orderBy('tanggal', 'DESC')->findAll();

        // KIRIM KE VIEW
        return view('sd/index', [
            'berita'     => $berita,
            'kegiatan'   => $kegiatan,
            'prestasi'   => $prestasi,
            'guru'       => $guru
        ]);
    }
}
