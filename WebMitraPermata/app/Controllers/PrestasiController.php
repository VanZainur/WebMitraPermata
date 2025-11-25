<?php

namespace App\Controllers;

use App\Models\PrestasiModel;

class PrestasiController extends BaseController
{
    protected $prestasiModel;

    public function __construct()
    {
        $this->prestasiModel = new PrestasiModel();
    }

    // List prestasi per jenjang
    public function index($jenjang)
    {
        $allowed = ['smk', 'smp', 'sd', 'tk'];
        if (!in_array($jenjang, $allowed)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Jenjang tidak valid');
        }

        $data['prestasi'] = $this->prestasiModel
            ->where('jenjang', $jenjang)
            ->orderBy('tanggal', 'DESC')
            ->findAll();

        return view("$jenjang/prestasi_list", $data);
    }

    // Detail prestasi per jenjang
    public function detail($jenjang, $id)
    {
        $allowed = ['smk', 'smp', 'sd', 'tk'];
        if (!in_array($jenjang, $allowed)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Jenjang tidak valid');
        }

        $data['prestasi'] = $this->prestasiModel
            ->where('id', $id)
            ->where('jenjang', $jenjang)
            ->first();

        if (!$data['prestasi']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Prestasi tidak ditemukan');
        }

        return view("$jenjang/detail_prestasi", $data);
    }
}
