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
        // AMBIL DATA DENGAN LIMIT
        $berita = (new BeritaModel())
                    ->where('jenjang', 'smk')
                    ->orderBy('tanggal', 'DESC')
                    ->limit(3)
                    ->findAll();

        $kegiatan = (new KegiatanModel())
                    ->where('jenjang', 'smk')
                    ->orderBy('tanggal', 'DESC')
                    ->limit(4)
                    ->findAll();

        $prestasi = (new PrestasiModel())
                    ->where('jenjang', 'smk')
                    ->orderBy('tanggal', 'DESC')
                    ->limit(6)
                    ->findAll();

        $guru = (new GuruModel())
                    ->where('jenjang', 'smk')
                    ->orderBy('id', 'DESC')
                    ->limit(8)
                    ->findAll();

        // KIRIM KE VIEW
        return view('smk/index', [
            'berita'   => $berita,
            'kegiatan' => $kegiatan,
            'prestasi' => $prestasi,
            'guru'     => $guru
        ]);
    }

    // ===============================
    // FUNGSI KIRIM KONTAK
    // ===============================
    public function kirimKontak()
    {
        // Set header JSON
        $this->response->setContentType('application/json');

        helper(['form']);

        // Honeypot
        if ($this->request->getPost('hp_token')) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Akses terdeteksi sebagai bot.'
            ]);
        }

        // Validasi
        $rules = [
            'name'    => 'required|min_length[3]',
            'email'   => 'required|valid_email',
            'subject' => 'required|min_length[3]',
            'message' => 'required|min_length[10]',
        ];

        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => implode('<br>', $this->validator->getErrors())
            ]);
        }

        // Kirim email
        try {
            $emailService = \Config\Services::email();

            $emailService->setFrom('hariliburya@gmail.com', 'Website SMK Mitra Permata');
            $emailService->setTo('hariliburya@gmail.com');
            $emailService->setReplyTo(
                $this->request->getPost('email'),
                $this->request->getPost('name')
            );
            $emailService->setSubject("Kontak SMK: " . $this->request->getPost('subject'));

            $body = "
            <html>
            <body>
                <h3>Pesan Kontak dari Website SMK</h3>
                <p><strong>Nama:</strong> " . esc($this->request->getPost('name')) . "</p>
                <p><strong>Email:</strong> " . esc($this->request->getPost('email')) . "</p>
                <p><strong>Subjek:</strong> " . esc($this->request->getPost('subject')) . "</p>
                <hr>
                <p><strong>Pesan:</strong></p>
                <p>" . nl2br(esc($this->request->getPost('message'))) . "</p>
            </body>
            </html>
            ";

            $emailService->setMessage($body);

            if (!$emailService->send()) {
                return $this->response->setJSON([
                    'status'  => 'error',
                    'message' => 'Gagal mengirim email. Detail: ' . $emailService->printDebugger()
                ]);
            }

            return $this->response->setJSON([
                'status'  => 'success',
                'message' => 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.'
            ]);

        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Error: ' . $e->getMessage()
            ]);
        }
    }
}
