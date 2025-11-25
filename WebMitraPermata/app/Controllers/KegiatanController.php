<?php

namespace App\Controllers;
use App\Models\KegiatanModel;

class KegiatanController extends BaseController
{
    protected $kegiatanModel;

    public function __construct()
    {
        $this->kegiatanModel = new KegiatanModel();
    }

    // Detail kegiatan berdasarkan jenjang
    public function detail($jenjang, $id)
    {
        $allowed = ['smk', 'smp', 'sd', 'tk'];
        if (!in_array($jenjang, $allowed)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Jenjang tidak valid');
        }

        $data['kegiatan'] = $this->kegiatanModel
            ->where('id', $id)
            ->where('jenjang', $jenjang)
            ->first();

        if (!$data['kegiatan']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kegiatan tidak ditemukan');
        }

        return view("$jenjang/detail_kegiatan", $data);
    }
}
