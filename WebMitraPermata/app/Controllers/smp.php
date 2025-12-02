<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KegiatanModel;
use App\Models\PrestasiModel;
use App\Models\GuruModel;

class Smp extends BaseController
{
    public function index()
    {
        // AMBIL DATA
        $berita     = (new BeritaModel())->where('jenjang', 'smp')->orderBy('tanggal', 'DESC')->findAll();
        $kegiatan   = (new KegiatanModel())->where('jenjang', 'smp')->orderBy('tanggal', 'DESC')->findAll();
        $prestasi   = (new PrestasiModel())->where('jenjang', 'smp')->orderBy('tanggal', 'DESC')->findAll();
        $guru       = (new GuruModel())->where('jenjang', 'smp')->orderBy('tanggal', 'DESC')->findAll();

        // KIRIM KE VIEW
        return view('smp/index', [
            'berita'     => $berita,
            'kegiatan'   => $kegiatan,
            'prestasi'   => $prestasi,
            'guru'       => $guru
        ]);
    }
}
