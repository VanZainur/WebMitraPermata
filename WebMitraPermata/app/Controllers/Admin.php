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



    public function exportExcel()
{
    $session = session();
    $jenjang = $session->get('jenjang');
    $role = $session->get('role');

    $pendaftaranModel = new PendaftaranModel();

    if ($role === "superadmin") {
        $data = $pendaftaranModel->orderBy('created_at', 'DESC')->findAll();
    } else {
        $data = $pendaftaranModel
            ->where('jenjang', $jenjang)
            ->orderBy('created_at', 'DESC')
            ->findAll();
    }

    // Buat Spreadsheet baru
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Header
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'Nama');
    $sheet->setCellValue('C1', 'Asal Sekolah');
    $sheet->setCellValue('D1', 'Jurusan');
    $sheet->setCellValue('E1', 'No HP');
    $sheet->setCellValue('F1', 'Email');
    $sheet->setCellValue('G1', 'Jenjang');
    $sheet->setCellValue('H1', 'Tanggal Daftar');

    // Style header
    $sheet->getStyle('A1:H1')->getFont()->setBold(true);
    $sheet->getStyle('A1:H1')->getFill()
        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()->setARGB('FFf1f5f9');

    // Isi data
    $row = 2;
    $no = 1;
    foreach ($data as $item) {
        $sheet->setCellValue('A' . $row, $no++);
        $sheet->setCellValue('B' . $row, $item['nama']);
        $sheet->setCellValue('C' . $row, $item['asal_sekolah']);
        $sheet->setCellValue('D' . $row, $item['jurusan']);
        $sheet->setCellValue('E' . $row, $item['no_hp']);
        $sheet->setCellValue('F' . $row, $item['email'] ?? '-');
        $sheet->setCellValue('G' . $row, strtoupper($item['jenjang']));
        $sheet->setCellValue('H' . $row, date('d-m-Y H:i', strtotime($item['created_at'])));
        $row++;
    }

    // Auto size kolom
    foreach (range('A', 'H') as $col) {
        $sheet->getColumnDimension($col)->setAutoSize(true);
    }

    // Download file
    $filename = 'Data_Pendaftar_' . strtoupper($jenjang) . '_' . date('Y-m-d') . '.xlsx';
    
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $writer->save('php://output');
    exit;
}


    public function exportPdf()
{
    $session = session();
    $jenjang = $session->get('jenjang');
    $role    = $session->get('role');

    $pendaftaranModel = new PendaftaranModel();

    if ($role === "superadmin") {
        $data = $pendaftaranModel->orderBy('created_at', 'DESC')->findAll();
    } else {
        $data = $pendaftaranModel
            ->where('jenjang', $jenjang)
            ->orderBy('created_at', 'DESC')
            ->findAll();
    }

    // Logo
    $logoPath = FCPATH . 'assets/images/logo.png';
    $logoBase64 = "";
    if (file_exists($logoPath)) {
        $logoBase64 = "data:image/png;base64," . base64_encode(file_get_contents($logoPath));
    }

    // ====== HTML PDF ======
    $html = '
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        h2   { text-align:center; margin:0; }
        h4   { text-align:center; margin-top:5px; }

        table {
            width:100%;
            border-collapse: collapse;
            margin-top:20px;
        }
        table th {
            background:#e2e8f0;
            border:1px solid #000;
            text-align:center;
            padding:8px;
            font-weight:bold;
        }
        table td {
            border:1px solid #000;
            padding:6px;
        }
    </style>

    <div style="text-align:center;">';

    if ($logoBase64 != "") {
        $html .= '<img src="'.$logoBase64.'" style="width:80px; margin-bottom:10px;">';
    }

    $html .= '
        <h2>YAYASAN MITRA PERMATA</h2>
        <h4>Data Pendaftar</h4>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Jurusan</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Tanggal Daftar</th>
            </tr>
        </thead>
        <tbody>';

    $no = 1;
    foreach ($data as $item) {
        $html .= '
            <tr>
                <td style="text-align:center;">'.$no++.'</td>
                <td>'.$item['nama'].'</td>
                <td>'.$item['asal_sekolah'].'</td>
                <td>'.$item['jurusan'].'</td>
                <td>'.$item['no_hp'].'</td>
                <td>'.($item['email'] ?? '-').'</td>
                <td>'.date('d-m-Y H:i', strtotime($item['created_at'])).'</td>
            </tr>';
    }

    $html .= '</tbody></table>';

    // ===== DOMPDF =====
    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper("A4", "portrait");
    $dompdf->render();

    $filename = 'Data_Pendaftar_' . strtoupper($jenjang) . '_' . date('Y-m-d') . '.pdf';
    $dompdf->stream($filename, ["Attachment" => true]);
    exit;
}


    // ==========================================
    // BERITA
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

    public function beritaCreate()
    {
        $session = session();
        return view('admin/berita/create', [
            'nama'    => $session->get('nama'),
            'jenjang' => $session->get('jenjang'),
            'role'    => $session->get('role')
        ]);
    }

    public function beritaStore()
    {
        $session = session();
        $beritaModel = new BeritaModel();

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
            return redirect()->back()->with('error', 'Jenjang tidak ditemukan.')->withInput();
        }

        $rules = [
            'judul' => 'required|min_length[3]',
            'deskripsi' => 'required|min_length[10]',
            'tanggal' => 'required',
            'gambar' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $gambar = $this->request->getFile('gambar');
        $path = WRITEPATH . 'uploads/' . strtolower($jenjang) . '/berita/';
        
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        $namaGambar = $gambar->getRandomName();
        
        try {
            $gambar->move($path, $namaGambar);
            
            if (!file_exists($path . $namaGambar)) {
                return redirect()->back()->with('error', 'Gagal upload gambar')->withInput();
            }
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }

        $data = [
            'jenjang'   => strtolower($jenjang),
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
                @unlink($path . $namaGambar);
                return redirect()->back()->with('error', 'Gagal menyimpan ke database')->withInput();
            }
            
        } catch (\Exception $e) {
            @unlink($path . $namaGambar);
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }

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

    public function beritaUpdate($id)
    {
        $session = session();
        $beritaModel = new BeritaModel();

        $beritaLama = $beritaModel->find($id);

        if (!$beritaLama) {
            return redirect()->to('/admin/berita')->with('error', 'Berita tidak ditemukan');
        }

        $jenjang = ($session->get('role') === 'superadmin') 
                    ? $this->request->getPost('jenjang') 
                    : $session->get('jenjang');

        $gambar = $this->request->getFile('gambar');
        $namaGambar = $beritaLama['gambar'];

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            
            $pathLama = WRITEPATH . 'uploads/' . strtolower($beritaLama['jenjang']) . '/berita/' . $beritaLama['gambar'];
            if (file_exists($pathLama)) {
                @unlink($pathLama);
            }

            $namaGambar = $gambar->getRandomName();
            $pathBaru = WRITEPATH . 'uploads/' . strtolower($jenjang) . '/berita/';
            
            if (!is_dir($pathBaru)) {
                mkdir($pathBaru, 0777, true);
            }
            
            $gambar->move($pathBaru, $namaGambar);
            
        } else {
            if (strtolower($jenjang) !== strtolower($beritaLama['jenjang'])) {
                $pathLama = WRITEPATH . 'uploads/' . strtolower($beritaLama['jenjang']) . '/berita/' . $beritaLama['gambar'];
                $pathBaru = WRITEPATH . 'uploads/' . strtolower($jenjang) . '/berita/';
                
                if (!is_dir($pathBaru)) {
                    mkdir($pathBaru, 0777, true);
                }
                
                if (file_exists($pathLama)) {
                    copy($pathLama, $pathBaru . $beritaLama['gambar']);
                    @unlink($pathLama);
                }
            }
        }

        $data = [
            'jenjang'   => strtolower($jenjang),
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar'    => $namaGambar,
            'tanggal'   => $this->request->getPost('tanggal')
        ];

        $beritaModel->update($id, $data);

        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil diupdate');
    }

    public function beritaDelete($id)
    {
        $beritaModel = new BeritaModel();
        
        $berita = $beritaModel->find($id);
        
        if ($berita) {
            $pathGambar = WRITEPATH . 'uploads/' . strtolower($berita['jenjang']) . '/berita/' . $berita['gambar'];
            if (file_exists($pathGambar)) {
                @unlink($pathGambar);
            }
            
            $beritaModel->delete($id);
        }

        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil dihapus');
    }

    // ==========================================
    // KEGIATAN
    // ==========================================
    
    // ✅ PERBAIKI: Nama method harus lowercase 'kegiatan', bukan 'Kegiatan'
    public function kegiatan()
    {
        $session = session();
        $nama    = $session->get('nama');
        $jenjang = $session->get('jenjang');
        $role    = $session->get('role');

        $kegiatanModel = new KegiatanModel(); // ✅ lowercase

        if ($role === "superadmin") {
            $kegiatan = $kegiatanModel->orderBy('tanggal', 'DESC')->findAll();
        } else {
            $kegiatan = $kegiatanModel->where('jenjang', $jenjang)->orderBy('tanggal', 'DESC')->findAll();
        }

        return view('admin/kegiatan/list', [ // ✅ lowercase folder
            'nama'     => $nama,
            'jenjang'  => $jenjang,
            'role'     => $role,
            'kegiatan' => $kegiatan // ✅ lowercase variabel
        ]);
    }

    public function kegiatanCreate()
    {
        $session = session();
        return view('admin/kegiatan/create', [
            'nama'    => $session->get('nama'),
            'jenjang' => $session->get('jenjang'),
            'role'    => $session->get('role')
        ]);
    }

    public function kegiatanStore()
    {
        $session = session();
        $kegiatanModel = new KegiatanModel();

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
            return redirect()->back()->with('error', 'Jenjang tidak ditemukan.')->withInput();
        }

        $rules = [
            'judul' => 'required|min_length[3]',
            'deskripsi' => 'required|min_length[10]',
            'tanggal' => 'required',
            'gambar' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $gambar = $this->request->getFile('gambar');
        $path = WRITEPATH . 'uploads/' . strtolower($jenjang) . '/kegiatan/'; // ✅ lowercase
        
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        $namaGambar = $gambar->getRandomName();
        
        try {
            $gambar->move($path, $namaGambar);
            
            if (!file_exists($path . $namaGambar)) {
                return redirect()->back()->with('error', 'Gagal upload gambar')->withInput();
            }
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }

        $data = [
            'jenjang'   => strtolower($jenjang),
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar'    => $namaGambar,
            'tanggal'   => $this->request->getPost('tanggal')
        ];

        try {
            $result = $kegiatanModel->insert($data);
            
            if ($result) {
                return redirect()->to('/admin/kegiatan')->with('success', 'Kegiatan berhasil ditambahkan!');
            } else {
                @unlink($path . $namaGambar);
                return redirect()->back()->with('error', 'Gagal menyimpan ke database')->withInput();
            }
            
        } catch (\Exception $e) {
            @unlink($path . $namaGambar);
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }

    public function kegiatanEdit($id)
    {
        $session = session();
        $kegiatanModel = new KegiatanModel();

        $kegiatan = $kegiatanModel->find($id);

        if (!$kegiatan) {
            return redirect()->to('/admin/kegiatan')->with('error', 'Kegiatan tidak ditemukan');
        }

        return view('admin/kegiatan/edit', [
            'nama'     => $session->get('nama'),
            'jenjang'  => $session->get('jenjang'),
            'role'     => $session->get('role'),
            'kegiatan' => $kegiatan
        ]);
    }

    public function kegiatanUpdate($id)
    {
        $session = session();
        $kegiatanModel = new KegiatanModel();

        $kegiatanLama = $kegiatanModel->find($id);

        if (!$kegiatanLama) {
            return redirect()->to('/admin/kegiatan')->with('error', 'Kegiatan tidak ditemukan');
        }

        $jenjang = ($session->get('role') === 'superadmin') 
                    ? $this->request->getPost('jenjang') 
                    : $session->get('jenjang');

        $gambar = $this->request->getFile('gambar');
        $namaGambar = $kegiatanLama['gambar'];

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            
            $pathLama = WRITEPATH . 'uploads/' . strtolower($kegiatanLama['jenjang']) . '/kegiatan/' . $kegiatanLama['gambar'];
            if (file_exists($pathLama)) {
                @unlink($pathLama);
            }

            $namaGambar = $gambar->getRandomName();
            $pathBaru = WRITEPATH . 'uploads/' . strtolower($jenjang) . '/kegiatan/';
            
            if (!is_dir($pathBaru)) {
                mkdir($pathBaru, 0777, true);
            }
            
            $gambar->move($pathBaru, $namaGambar);
            
        } else {
            if (strtolower($jenjang) !== strtolower($kegiatanLama['jenjang'])) {
                $pathLama = WRITEPATH . 'uploads/' . strtolower($kegiatanLama['jenjang']) . '/kegiatan/' . $kegiatanLama['gambar'];
                $pathBaru = WRITEPATH . 'uploads/' . strtolower($jenjang) . '/kegiatan/';
                
                if (!is_dir($pathBaru)) {
                    mkdir($pathBaru, 0777, true);
                }
                
                if (file_exists($pathLama)) {
                    copy($pathLama, $pathBaru . $kegiatanLama['gambar']);
                    @unlink($pathLama);
                }
            }
        }

        $data = [
            'jenjang'   => strtolower($jenjang),
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar'    => $namaGambar,
            'tanggal'   => $this->request->getPost('tanggal')
        ];

        $kegiatanModel->update($id, $data);

        return redirect()->to('/admin/kegiatan')->with('success', 'Kegiatan berhasil diupdate');
    }

    public function kegiatanDelete($id)
    {
        $kegiatanModel = new KegiatanModel();
        
        $kegiatan = $kegiatanModel->find($id);
        
        if ($kegiatan) {
            $pathGambar = WRITEPATH . 'uploads/' . strtolower($kegiatan['jenjang']) . '/kegiatan/' . $kegiatan['gambar'];
            if (file_exists($pathGambar)) {
                @unlink($pathGambar);
            }
            
            $kegiatanModel->delete($id);
        }

        return redirect()->to('/admin/kegiatan')->with('success', 'Kegiatan berhasil dihapus');
    }

    // ==========================================
    // PRESTASI
    // ==========================================
    public function prestasi()
    {
        $session = session();
        $nama    = $session->get('nama');
        $jenjang = $session->get('jenjang');
        $role    = $session->get('role');

        $prestasiModel = new PrestasiModel(); // ✅ Perbaiki: PrestasiModel, bukan prestasiModel

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

    public function prestasiCreate()
    {
        $session = session();
        return view('admin/prestasi/create', [
            'nama'    => $session->get('nama'),
            'jenjang' => $session->get('jenjang'),
            'role'    => $session->get('role')
        ]);
    }

    public function prestasiStore()
    {
        $session = session();
        $prestasiModel = new PrestasiModel();

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
            return redirect()->back()->with('error', 'Jenjang tidak ditemukan.')->withInput();
        }

        $rules = [
            'judul' => 'required|min_length[3]',
            'deskripsi' => 'required|min_length[10]',
            'tanggal' => 'required',
            'gambar' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $gambar = $this->request->getFile('gambar');
        $path = WRITEPATH . 'uploads/' . strtolower($jenjang) . '/prestasi/';
        
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        $namaGambar = $gambar->getRandomName();
        
        try {
            $gambar->move($path, $namaGambar);
            
            if (!file_exists($path . $namaGambar)) {
                return redirect()->back()->with('error', 'Gagal upload gambar')->withInput();
            }
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }

        $data = [
            'jenjang'   => strtolower($jenjang),
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar'    => $namaGambar,
            'tanggal'   => $this->request->getPost('tanggal')
        ];

        try {
            $result = $prestasiModel->insert($data);
            
            if ($result) {
                return redirect()->to('/admin/prestasi')->with('success', 'Prestasi berhasil ditambahkan!');
            } else {
                @unlink($path . $namaGambar);
                return redirect()->back()->with('error', 'Gagal menyimpan ke database')->withInput();
            }
            
        } catch (\Exception $e) {
            @unlink($path . $namaGambar);
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }

    public function prestasiEdit($id)
    {
        $session = session();
        $prestasiModel = new PrestasiModel();

        $prestasi = $prestasiModel->find($id);

        if (!$prestasi) {
            return redirect()->to('/admin/prestasi')->with('error', 'Prestasi tidak ditemukan');
        }

        return view('admin/prestasi/edit', [
            'nama'     => $session->get('nama'),
            'jenjang'  => $session->get('jenjang'),
            'role'     => $session->get('role'),
            'prestasi' => $prestasi
        ]);
    }

    public function prestasiUpdate($id)
    {
        $session = session();
        $prestasiModel = new PrestasiModel();

        $prestasiLama = $prestasiModel->find($id);

        if (!$prestasiLama) {
            return redirect()->to('/admin/prestasi')->with('error', 'Prestasi tidak ditemukan');
        }

        $jenjang = ($session->get('role') === 'superadmin') 
                    ? $this->request->getPost('jenjang') 
                    : $session->get('jenjang');

        $gambar = $this->request->getFile('gambar');
        $namaGambar = $prestasiLama['gambar'];

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            
            $pathLama = WRITEPATH . 'uploads/' . strtolower($prestasiLama['jenjang']) . '/prestasi/' . $prestasiLama['gambar'];
            if (file_exists($pathLama)) {
                @unlink($pathLama);
            }

            $namaGambar = $gambar->getRandomName();
            $pathBaru = WRITEPATH . 'uploads/' . strtolower($jenjang) . '/prestasi/';
            
            if (!is_dir($pathBaru)) {
                mkdir($pathBaru, 0777, true);
            }
            
            $gambar->move($pathBaru, $namaGambar);
            
        } else {
            if (strtolower($jenjang) !== strtolower($prestasiLama['jenjang'])) {
                $pathLama = WRITEPATH . 'uploads/' . strtolower($prestasiLama['jenjang']) . '/prestasi/' . $prestasiLama['gambar'];
                $pathBaru = WRITEPATH . 'uploads/' . strtolower($jenjang) . '/prestasi/';
                
                if (!is_dir($pathBaru)) {
                    mkdir($pathBaru, 0777, true);
                }
                
                if (file_exists($pathLama)) {
                    copy($pathLama, $pathBaru . $prestasiLama['gambar']);
                    @unlink($pathLama);
                }
            }
        }

        $data = [
            'jenjang'   => strtolower($jenjang),
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar'    => $namaGambar,
            'tanggal'   => $this->request->getPost('tanggal')
        ];

        $prestasiModel->update($id, $data);

        return redirect()->to('/admin/prestasi')->with('success', 'Prestasi berhasil diupdate');
    }

    public function prestasiDelete($id)
    {
        $prestasiModel = new PrestasiModel();
        
        $prestasi = $prestasiModel->find($id);
        
        if ($prestasi) {
            $pathGambar = WRITEPATH . 'uploads/' . strtolower($prestasi['jenjang']) . '/prestasi/' . $prestasi['gambar'];
            if (file_exists($pathGambar)) {
                @unlink($pathGambar);
            }
            
            $prestasiModel->delete($id);
        }

        return redirect()->to('/admin/prestasi')->with('success', 'Prestasi berhasil dihapus');
    }
}