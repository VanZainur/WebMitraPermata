<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;
use App\Models\BeritaModel;
use App\Models\KegiatanModel;
use App\Models\PrestasiModel;

class Admin extends BaseController
{
    public function index()
    {
        $session = session();
        
        $nama    = $session->get('nama');
        $jenjang = $session->get('jenjang');
        $role    = $session->get('role');

        $pendaftaranModel = new PendaftaranModel();

        if ($role === "superadmin") {
            $totalAll = $pendaftaranModel->countAllResults();
            $totalBy = [
                'smk' => $pendaftaranModel->where('jenjang','smk')->countAllResults(),
                'smp' => $pendaftaranModel->where('jenjang','smp')->countAllResults(),
                'sd'  => $pendaftaranModel->where('jenjang','sd')->countAllResults(),
                'tk'  => $pendaftaranModel->where('jenjang','tk')->countAllResults(),
            ];
            $pendaftaran = $pendaftaranModel->orderBy('created_at','DESC')->findAll();
        } else {
            $totalAll = $pendaftaranModel->where('jenjang',$jenjang)->countAllResults();
            $totalBy = [$jenjang => $totalAll];
            $pendaftaran = $pendaftaranModel
                ->where('jenjang',$jenjang)
                ->orderBy('created_at','DESC')
                ->findAll();
        }

        return view('admin/home', [
            'nama'         => $nama,
            'jenjang'      => $jenjang,
            'role'         => $role,
            'totalAll'     => $totalAll,
            'totalBy'      => $totalBy,
            'pendaftaran'  => $pendaftaran
        ]);
    }

    // ==========================================
    // BERITA - LIST
    // ==========================================
    public function berita()
    {
        $session = session();
        $nama    = $session->get('nama');
        $jenjang = $session->get('jenjang');
        $role    = $session->get('role');

        $beritaModel = new BeritaModel();

        if ($role === "superadmin") {
            $berita = $beritaModel->orderBy('tanggal', 'DESC')->findAll();
        } else {
            $berita = $beritaModel->where('jenjang', $jenjang)->orderBy('tanggal', 'DESC')->findAll();
        }

        return view('admin/berita/list', [
            'nama'    => $nama,
            'jenjang' => $jenjang,
            'role'    => $role,
            'berita'  => $berita
        ]);
    }

    // ==========================================
    // BERITA - CREATE (FORM)
    // ==========================================
    public function beritaCreate()
    {
        $session = session();
        return view('admin/berita/create', [
            'nama'    => $session->get('nama'),
            'jenjang' => $session->get('jenjang'),
            'role'    => $session->get('role')
        ]);
    }

    // ==========================================
    // BERITA - STORE (SIMPAN)
    // ==========================================
   public function beritaStore()
{
    $session = session();
    $beritaModel = new BeritaModel();

    // AMBIL JENJANG
    if ($session->get('role') === 'superadmin') {
        $jenjang = $this->request->getPost('jenjang');
    } else {
        $jenjang = $session->get('jenjang');
        if (empty($jenjang)) {
            $username = $session->get('username');
            $jenjang = str_replace('admin_', '', $username);
        }
    }

    if (empty($jenjang)) {
        return redirect()->back()->with('error', 'Jenjang tidak ditemukan. Silakan login ulang.')->withInput();
    }

    // VALIDASI INPUT
    $rules = [
        'judul' => 'required|min_length[3]',
        'deskripsi' => 'required|min_length[10]',
        'tanggal' => 'required'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('error', implode('<br>', $this->validator->getErrors()));
    }

    // HANDLE UPLOAD GAMBAR
    $gambar = $this->request->getFile('gambar');
    
    if (!$gambar || $gambar->getName() === '') {
        return redirect()->back()->with('error', 'Gambar harus diupload')->withInput();
    }

    if (!$gambar->isValid()) {
        return redirect()->back()->with('error', 'File tidak valid: ' . $gambar->getErrorString())->withInput();
    }

    if ($gambar->getSize() > 2048000) {
        return redirect()->back()->with('error', 'Ukuran gambar maksimal 2MB')->withInput();
    }

    $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
    if (!in_array($gambar->getMimeType(), $allowedTypes)) {
        return redirect()->back()->with('error', 'Format gambar harus JPG, PNG, GIF, atau WEBP')->withInput();
    }

    // PROSES UPLOAD
    $namaGambar = $gambar->getRandomName();
    $path = FCPATH . 'assets/' . strtoupper($jenjang) . '/img/berita/';
    
    // BUAT FOLDER KALAU BELUM ADA
    if (!is_dir($path)) {
        @mkdir($path, 0777, true); // @ untuk suppress warning
    }

    // ✅ LANGSUNG UPLOAD TANPA CEK PERMISSION (untuk Windows)
    try {
        $uploaded = $gambar->move($path, $namaGambar);
        
        if (!$uploaded) {
            return redirect()->back()->with('error', 'Gagal upload: ' . $gambar->getErrorString())->withInput();
        }
        
        // Double check file tersimpan
        if (!file_exists($path . $namaGambar)) {
            return redirect()->back()->with('error', 'File tidak ditemukan setelah upload')->withInput();
        }
        
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error upload: ' . $e->getMessage())->withInput();
    }

    // SIMPAN KE DATABASE
    $data = [
        'jenjang'   => $jenjang,
        'judul'     => $this->request->getPost('judul'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'gambar'    => $namaGambar,
        'tanggal'   => $this->request->getPost('tanggal')
    ];

    try {
        $result = $beritaModel->insert($data);
        
        if ($result) {
            return redirect()->to('/admin/berita')->with('success', 'Berita berhasil ditambahkan!');
        } else {
            // Hapus file kalau insert gagal
            @unlink($path . $namaGambar);
            return redirect()->back()->with('error', 'Gagal menyimpan ke database')->withInput();
        }
        
    } catch (\Exception $e) {
        // Hapus file kalau error
        @unlink($path . $namaGambar);
        return redirect()->back()->with('error', 'Error database: ' . $e->getMessage())->withInput();
    }
}
    // ==========================================
    // BERITA - EDIT (FORM)
    // ==========================================
    public function beritaEdit($id)
    {
        $session = session();
        $beritaModel = new BeritaModel();

        $berita = $beritaModel->find($id);

        if (!$berita) {
            return redirect()->to('/admin/berita')->with('error', 'Berita tidak ditemukan');
        }

        return view('admin/berita/edit', [
            'nama'    => $session->get('nama'),
            'jenjang' => $session->get('jenjang'),
            'role'    => $session->get('role'),
            'berita'  => $berita
        ]);
    }

    // ==========================================
    // BERITA - UPDATE
    // ==========================================
    public function beritaUpdate($id)
    {
        $session = session();
        $beritaModel = new BeritaModel();

        // Ambil data lama
        $beritaLama = $beritaModel->find($id);

        if (!$beritaLama) {
            return redirect()->to('/admin/berita')->with('error', 'Berita tidak ditemukan');
        }

        // Jika superadmin, ambil dari form. Jika admin biasa, ambil dari session
        $jenjang = ($session->get('role') === 'superadmin') 
                    ? $this->request->getPost('jenjang') 
                    : $session->get('jenjang');

        // HANDLE UPLOAD GAMBAR BARU (OPSIONAL)
        $gambar = $this->request->getFile('gambar');
        $namaGambar = $beritaLama['gambar']; // Default: pakai gambar lama

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            
            // Hapus gambar lama dengan path jenjang yang lama
            $pathLama = FCPATH . 'assets/' . strtoupper($beritaLama['jenjang']) . '/img/berita/' . $beritaLama['gambar'];
            if (file_exists($pathLama)) {
                unlink($pathLama);
            }

            // Upload gambar baru ke jenjang yang baru (kalau superadmin bisa ganti jenjang)
            $namaGambar = $gambar->getRandomName();
            $pathBaru = FCPATH . 'assets/' . strtoupper($jenjang) . '/img/berita/';
            
            if (!is_dir($pathBaru)) {
                mkdir($pathBaru, 0777, true);
            }
            
            $gambar->move($pathBaru, $namaGambar);
            
        } else {
            // Jika jenjang berubah tapi gambar tidak diupload ulang, pindahkan gambar lama
            if ($jenjang !== $beritaLama['jenjang']) {
                $pathLama = FCPATH . 'assets/' . strtoupper($beritaLama['jenjang']) . '/img/berita/' . $beritaLama['gambar'];
                $pathBaru = FCPATH . 'assets/' . strtoupper($jenjang) . '/img/berita/';
                
                if (!is_dir($pathBaru)) {
                    mkdir($pathBaru, 0777, true);
                }
                
                if (file_exists($pathLama)) {
                    copy($pathLama, $pathBaru . $beritaLama['gambar']);
                    unlink($pathLama);
                }
            }
        }

        // Update data
        $data = [
            'jenjang'   => $jenjang,
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar'    => $namaGambar,
            'tanggal'   => $this->request->getPost('tanggal')
        ];

        $beritaModel->update($id, $data);

        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil diupdate');
    }

    // ==========================================
    // BERITA - DELETE
    // ==========================================
    public function beritaDelete($id)
    {
        $beritaModel = new BeritaModel();
        
        // Ambil data berita
        $berita = $beritaModel->find($id);
        
        if ($berita) {
            // Hapus file gambar dari folder dengan path jenjang
            $pathGambar = FCPATH . 'assets/' . strtoupper($berita['jenjang']) . '/img/berita/' . $berita['gambar'];
            if (file_exists($pathGambar)) {
                unlink($pathGambar);
            }
            
            // Hapus data dari database
            $beritaModel->delete($id);
        }

        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil dihapus');
    }

    // ==========================================
    // KEGIATAN - LIST
    // ==========================================
    public function kegiatan()
    {
        $session = session();
        $nama    = $session->get('nama');
        $jenjang = $session->get('jenjang');
        $role    = $session->get('role');

        $kegiatanModel = new KegiatanModel();

        if ($role === "superadmin") {
            $kegiatan = $kegiatanModel->orderBy('tanggal', 'DESC')->findAll();
        } else {
            $kegiatan = $kegiatanModel->where('jenjang', $jenjang)->orderBy('tanggal', 'DESC')->findAll();
        }

        return view('admin/kegiatan/list', [
            'nama'     => $nama,
            'jenjang'  => $jenjang,
            'role'     => $role,
            'kegiatan' => $kegiatan
        ]);
    }

    // ==========================================
    // PRESTASI - LIST
    // ==========================================
    public function prestasi()
    {
        $session = session();
        $nama    = $session->get('nama');
        $jenjang = $session->get('jenjang');
        $role    = $session->get('role');

        $prestasiModel = new PrestasiModel();

        if ($role === "superadmin") {
            $prestasi = $prestasiModel->orderBy('tanggal', 'DESC')->findAll();
        } else {
            $prestasi = $prestasiModel->where('jenjang', $jenjang)->orderBy('tanggal', 'DESC')->findAll();
        }

        return view('admin/prestasi/list', [
            'nama'     => $nama,
            'jenjang'  => $jenjang,
            'role'     => $role,
            'prestasi' => $prestasi
        ]);
    }
}