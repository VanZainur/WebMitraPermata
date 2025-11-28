<?php

namespace App\Controllers;

class TK2 extends BaseController
{
    /**
     * Menampilkan halaman utama TK
     * 
     * @return string
     */
    public function index()
    {
        // Data yang mau dikirim ke view (optional)
        $data = [
            'title' => 'TK | Mitra Permata',
            'meta_description' => 'Website resmi TK Mitra Permata, tempat terbaik untuk anak bermain dan belajar',
        ];

        // Load view
        return view('TK2/index', $data);
    }

    /**
     * Halaman tentang (optional - kalau mau bikin multi-page)
     * 
     * @return string
     */
    public function about()
    {
        $data = [
            'title' => 'Tentang Kami - TK Pelangi Ceria',
        ];

        return view('TK2/about', $data);
    }

    /**
     * Halaman kontak (optional)
     * 
     * @return string
     */
    public function contact()
    {
        $data = [
            'title' => 'Hubungi Kami - TK Pelangi Ceria',
        ];

        return view('TK2/contact', $data);
    }

    /**
     * Handle form pendaftaran (optional)
     * 
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function register()
    {
        // Validasi form
        $validation = \Config\Services::validation();
        
        $validation->setRules([
            'nama_anak' => 'required|min_length[3]',
            'nama_orang_tua' => 'required',
            'email' => 'required|valid_email',
            'no_telp' => 'required|numeric',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nama_anak' => $this->request->getPost('nama_anak'),
            'nama_orang_tua' => $this->request->getPost('nama_orang_tua'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
        ];

        // Simpan ke database (sesuaikan dengan model kamu)
        // $model = new PendaftaranModel();
        // $model->insert($data);

        // Redirect dengan success message
        return redirect()->to('/tk2')->with('success', 'Pendaftaran berhasil!');
    }
}