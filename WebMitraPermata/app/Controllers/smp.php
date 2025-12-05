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
        // AMBIL DATA DENGAN LIMIT
        $berita   = (new BeritaModel())
                    ->where('jenjang', 'smp')
                    ->orderBy('tanggal', 'DESC')
                    ->limit(3)
                    ->findAll();

        $kegiatan = (new KegiatanModel())
                    ->where('jenjang', 'smp')
                    ->orderBy('tanggal', 'DESC')
                    ->limit(4)
                    ->findAll();

        $prestasi = (new PrestasiModel())
                    ->where('jenjang', 'smp')
                    ->orderBy('tanggal', 'DESC')
                    ->limit(6)
                    ->findAll();

        // Guru urut pakai id, limit 8
        $guru     = (new GuruModel())
                    ->where('jenjang', 'smp')
                    ->orderBy('id', 'DESC')
                    ->limit(8)
                    ->findAll();

        // KIRIM KE VIEW
        return view('smp/index', [
            'berita'   => $berita,
            'kegiatan' => $kegiatan,
            'prestasi' => $prestasi,
            'guru'     => $guru
        ]);
    }
}
