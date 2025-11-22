<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;

class Pendaftaran extends BaseController
{
    public function index()
    {
        return "OK";
    }

    public function submit()
    {
        $model = new PendaftaranModel();

        try {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'asal_sekolah' => $this->request->getPost('asal_sekolah'),
                'no_hp' => $this->request->getPost('no_hp'),
                'jurusan' => $this->request->getPost('jurusan'),
                'created_at' => date('Y-m-d H:i:s') // <— WAJIB
            ];

            $model->insert($data);

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Pendaftaran berhasil!'
            ]);

        } catch (\Throwable $e) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => [$e->getMessage()] // supaya JS gak nge-loop huruf satu2
            ]);
        }
    }
}
