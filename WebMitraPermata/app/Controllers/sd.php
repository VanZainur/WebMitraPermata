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
        // AMBIL DATA DENGAN LIMIT
        $berita   = (new BeritaModel())
                    ->where('jenjang', 'sd')
                    ->orderBy('tanggal', 'DESC')
                    ->limit(3)
                    ->findAll();

        $kegiatan = (new KegiatanModel())
                    ->where('jenjang', 'sd')
                    ->orderBy('tanggal', 'DESC')
                    ->limit(4)
                    ->findAll();

        $prestasi = (new PrestasiModel())
                    ->where('jenjang', 'sd')
                    ->orderBy('tanggal', 'DESC')
                    ->limit(6)
                    ->findAll();

        // Guru urut pakai id, limit 8
        $guru     = (new GuruModel())
                    ->where('jenjang', 'sd')
                    ->orderBy('id', 'DESC')
                    ->limit(8)
                    ->findAll();

        // KIRIM KE VIEW
        return view('sd/index', [
            'berita'   => $berita,
            'kegiatan' => $kegiatan,
            'prestasi' => $prestasi,
            'guru'     => $guru
        ]);
    }
}
