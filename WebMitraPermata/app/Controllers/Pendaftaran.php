<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;

class Pendaftaran extends BaseController
{
    public function submit($jenjang)
    {
        // valid jenjang
        $allowed = ['smk', 'smp', 'sd', 'tk'];
        if (!in_array($jenjang, $allowed)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Jenjang tidak valid.'
            ]);
        }

        // cek AJAX
        if (!$this->request->isAJAX()) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Invalid request.'
            ]);
        }

        $model = new PendaftaranModel();

        try {

            $data = [
                'nama'          => $this->request->getPost('nama'),
                'alamat'        => $this->request->getPost('alamat'),
                'asal_sekolah'  => $this->request->getPost('asal_sekolah'),
                'no_hp'         => $this->request->getPost('no_hp'),
                'jurusan'       => $this->request->getPost('jurusan'),
                'jenjang'       => $jenjang,
                'created_at'    => date('Y-m-d H:i:s'),
            ];

            $model->insert($data);

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Pendaftaran berhasil dikirim.'
            ]);

        } catch (\Throwable $e) {

            return $this->response->setJSON([
                'success' => false,
                'message' => 'Gagal menyimpan data.',
                'error'   => $e->getMessage()
            ]);
        }
    }
}
