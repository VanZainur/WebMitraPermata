<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;

class Admin extends BaseController
{
    public function index()
    {
        // Tampilkan halaman dashboard
        return view('admin/dashboard');
    }

    /**
     * API Endpoint untuk mengambil data pendaftaran
     * URL: admin/api/pendaftaran/{jenjang}
     * Contoh: admin/api/pendaftaran/smk
     */
    public function getPendaftaran($jenjang = null)
    {
        $pendaftaranModel = new PendaftaranModel();
        
        // Ambil semua data pendaftaran
        $data = $pendaftaranModel->orderBy('created_at', 'DESC')->findAll();
        
        // Format data untuk JavaScript
        $formattedData = [];
        foreach ($data as $index => $item) {
            $formattedData[] = [
                'id' => $item['id'],
                'no' => $index + 1, // Nomor urut
                'nama' => $item['nama'],
                'alamat' => $item['alamat'],
                'asal_sekolah' => $item['asal_sekolah'],
                'no_hp' => $item['no_hp'],
                'jurusan' => $item['jurusan'],
                'created_at' => $item['created_at']
            ];
        }
        
        // Return sebagai JSON
        return $this->response->setJSON([
            'success' => true,
            'data' => $formattedData
        ]);
    }
}