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

    public function detail($id)
    {
        $data['kegiatan'] = $this->kegiatanModel->find($id);

        if (!$data['kegiatan']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kegiatan tidak ditemukan');
        }

        return view('smk/detail_kegiatan', $data);
    }
}
