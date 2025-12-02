<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KegiatanModel;
use App\Models\PrestasiModel;
use App\Models\GuruModel;

class Smk extends BaseController
{
    public function index()
    {
        // AMBIL DATA
        $berita     = (new BeritaModel())->where('jenjang', 'smk')->orderBy('tanggal', 'DESC')->findAll();
        $kegiatan   = (new KegiatanModel())->where('jenjang', 'smk')->orderBy('tanggal', 'DESC')->findAll();
        $prestasi   = (new PrestasiModel())->where('jenjang', 'smk')->orderBy('tanggal', 'DESC')->findAll();
        $guru       = (new GuruModel())->where('jenjang', 'smk')->orderBy('tanggal', 'DESC')->findAll();

        // KIRIM KE VIEW
        return view('smk/index', [
            'berita'     => $berita,
            'kegiatan'   => $kegiatan,
            'prestasi'   => $prestasi,
            'guru'       => $guru
        ]);
    }
}
