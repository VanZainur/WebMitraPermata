<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;

class Pendaftaran extends BaseController
{
    public function submit($jenjang)
    {
        // ========================================
        // 1. VALIDASI JENJANG
        // ========================================
        $allowed = ['smk', 'smp', 'sd', 'tk'];
        if (!in_array($jenjang, $allowed)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Jenjang tidak valid.'
            ]);
        }

        // ========================================
        // 2. LOG DEBUGGING
        // ========================================
        log_message('info', '========== SUBMIT PENDAFTARAN START ==========');
        log_message('info', 'Jenjang: ' . $jenjang);
        log_message('info', 'Method: ' . $this->request->getMethod());
        log_message('info', 'Is AJAX: ' . ($this->request->isAJAX() ? 'YES' : 'NO'));
        log_message('info', 'User Agent: ' . $this->request->getUserAgent());

        $model = new PendaftaranModel();

        try {
            // ========================================
            // 3. AMBIL DATA DARI FORM
            // ========================================
            $data = [
                'jenjang'        => $jenjang,
                'nama'           => trim($this->request->getPost('nama') ?? ''),
                'tempat_lahir'   => trim($this->request->getPost('tempat_lahir') ?? ''),
                'tanggal_lahir'  => $this->request->getPost('tanggal_lahir'),
                'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
                'nama_ayah'      => trim($this->request->getPost('nama_ayah') ?? ''),
                'nama_ibu'       => trim($this->request->getPost('nama_ibu') ?? ''),
                'agama'          => $this->request->getPost('agama'),
                'alamat'         => trim($this->request->getPost('alamat') ?? ''),
                'no_hp'          => trim($this->request->getPost('no_hp') ?? ''),
                'asal_sekolah'   => trim($this->request->getPost('asal_sekolah') ?? ''),
                'jurusan'        => trim($this->request->getPost('jurusan') ?? '-'),
            ];

            // ✅ FIELD KHUSUS TK
            if ($jenjang === 'tk') {
                $data['nama_panggilan'] = trim($this->request->getPost('nama_panggilan') ?? '');
                $data['anak_ke'] = $this->request->getPost('anak_ke') ?? null;
                $data['pekerjaan_ayah'] = trim($this->request->getPost('pekerjaan_ayah') ?? '');
                $data['pekerjaan_ibu'] = trim($this->request->getPost('pekerjaan_ibu') ?? '');
            }

            log_message('info', 'Data received: ' . json_encode($data, JSON_UNESCAPED_UNICODE));

            // ========================================
            // 4. VALIDASI BERDASARKAN JENJANG
            // ========================================
            $validation = \Config\Services::validation();
            
            // Rules dasar untuk semua jenjang
            $baseRules = [
                'nama'  => 'required|min_length[3]|max_length[150]',
                'no_hp' => 'required|regex_match[/^08[0-9]{8,13}$/]',
            ];

            $messages = [
                'nama' => [
                    'required'   => 'Nama lengkap wajib diisi',
                    'min_length' => 'Nama minimal 3 karakter',
                    'max_length' => 'Nama maksimal 150 karakter'
                ],
                'no_hp' => [
                    'required'    => 'Nomor WhatsApp wajib diisi',
                    'regex_match' => 'Format nomor tidak valid (harus 08xxxxxxxxxx)'
                ],
            ];

            // ========================================
            // RULES KHUSUS PER JENJANG
            // ========================================
            switch ($jenjang) {
                case 'smk':
                    $rules = array_merge($baseRules, [
                        'tempat_lahir'  => 'required|max_length[100]',
                        'tanggal_lahir' => 'required|valid_date',
                        'jenis_kelamin' => 'required|in_list[Laki-laki,Perempuan]',
                        'nama_ayah'     => 'required|min_length[3]|max_length[150]',
                        'nama_ibu'      => 'required|min_length[3]|max_length[150]',
                        'agama'         => 'required|in_list[Islam,Kristen,Katolik,Hindu,Buddha,Konghucu]',
                        'alamat'        => 'required|min_length[10]',
                        'jurusan'       => 'required|min_length[3]',
                    ]);
                    $messages['jurusan'] = ['required' => 'Jurusan wajib dipilih'];
                    break;

                case 'smp':
                    $rules = array_merge($baseRules, [
                        'tempat_lahir'  => 'required|max_length[100]',
                        'tanggal_lahir' => 'required|valid_date',
                        'jenis_kelamin' => 'required|in_list[Laki-laki,Perempuan]',
                        'nama_ayah'     => 'required|min_length[3]|max_length[150]',
                        'nama_ibu'      => 'required|min_length[3]|max_length[150]',
                        'agama'         => 'required|in_list[Islam,Kristen,Katolik,Hindu,Buddha,Konghucu]',
                        'alamat'        => 'required|min_length[10]',
                    ]);
                    break;

                case 'sd':
                    $rules = array_merge($baseRules, [
                        'tempat_lahir'  => 'required|max_length[100]',
                        'tanggal_lahir' => 'required|valid_date',
                        'jenis_kelamin' => 'required|in_list[Laki-laki,Perempuan]',
                        'nama_ayah'     => 'required|min_length[3]|max_length[150]',
                        'nama_ibu'      => 'required|min_length[3]|max_length[150]',
                        'alamat'        => 'required|min_length[10]',
                    ]);
                    break;

                case 'tk':
                    $rules = array_merge($baseRules, [
                        'nama_panggilan' => 'required|min_length[2]|max_length[50]',
                        'tempat_lahir'   => 'required|max_length[100]',
                        'tanggal_lahir'  => 'required|valid_date',
                        'jenis_kelamin'  => 'required|in_list[Laki-laki,Perempuan]',
                        'anak_ke'        => 'required|numeric|greater_than[0]',
                        'nama_ayah'      => 'required|min_length[3]|max_length[150]',
                        'nama_ibu'       => 'required|min_length[3]|max_length[150]',
                        'pekerjaan_ayah' => 'required|min_length[3]|max_length[100]',
                        'pekerjaan_ibu'  => 'required|min_length[3]|max_length[100]',
                        'agama'          => 'required|in_list[Islam,Kristen,Katolik,Hindu,Buddha,Konghucu]',
                        'alamat'         => 'required|min_length[10]',
                    ]);
                    $messages = array_merge($messages, [
                        'nama_panggilan' => [
                            'required'   => 'Nama panggilan wajib diisi',
                            'min_length' => 'Nama panggilan minimal 2 karakter'
                        ],
                        'anak_ke' => [
                            'required'     => 'Anak ke- wajib diisi',
                            'numeric'      => 'Anak ke- harus berupa angka',
                            'greater_than' => 'Anak ke- minimal 1'
                        ],
                        'pekerjaan_ayah' => ['required' => 'Pekerjaan ayah wajib diisi'],
                        'pekerjaan_ibu'  => ['required' => 'Pekerjaan ibu wajib diisi'],
                    ]);
                    break;

                default:
                    $rules = $baseRules;
            }

            // Pesan validasi umum
            $messages = array_merge($messages, [
                'tempat_lahir' => ['required' => 'Tempat lahir wajib diisi'],
                'tanggal_lahir' => [
                    'required'   => 'Tanggal lahir wajib diisi',
                    'valid_date' => 'Format tanggal tidak valid'
                ],
                'jenis_kelamin' => ['required' => 'Jenis kelamin wajib dipilih'],
                'nama_ayah' => [
                    'required'   => 'Nama ayah wajib diisi',
                    'min_length' => 'Nama ayah minimal 3 karakter'
                ],
                'nama_ibu' => [
                    'required'   => 'Nama ibu wajib diisi',
                    'min_length' => 'Nama ibu minimal 3 karakter'
                ],
                'agama' => ['required' => 'Agama wajib dipilih'],
                'alamat' => [
                    'required'   => 'Alamat lengkap wajib diisi',
                    'min_length' => 'Alamat minimal 10 karakter'
                ],
            ]);

            // ========================================
            // 5. JALANKAN VALIDASI
            // ========================================
            $validation->setRules($rules, $messages);

            if (!$validation->run($data)) {
                $errors = $validation->getErrors();
                log_message('error', 'Validasi gagal: ' . json_encode($errors, JSON_UNESCAPED_UNICODE));
                
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Data tidak lengkap atau tidak valid',
                    'errors'  => $errors
                ]);
            }

            // ========================================
            // 6. SIMPAN KE DATABASE
            // ========================================
            $data['created_at'] = date('Y-m-d H:i:s');

            if ($model->insert($data)) {
                $insertId = $model->getInsertID();
                log_message('info', '✓ Data berhasil disimpan dengan ID: ' . $insertId);
                log_message('info', '========== SUBMIT PENDAFTARAN END (SUCCESS) ==========');
                
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'Pendaftaran berhasil! Terima kasih telah mendaftar di ' . strtoupper($jenjang) . ' Mitra Permata.',
                    'data'    => ['id' => $insertId]
                ]);
            } else {
                log_message('error', '✗ Gagal insert ke database');
                log_message('info', '========== SUBMIT PENDAFTARAN END (FAILED) ==========');
                
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Gagal menyimpan data. Silakan coba lagi.'
                ]);
            }

        } catch (\Throwable $e) {
            log_message('error', '✗ Exception: ' . $e->getMessage());
            log_message('error', 'Stack trace: ' . $e->getTraceAsString());
            log_message('info', '========== SUBMIT PENDAFTARAN END (ERROR) ==========');
            
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem. Silakan coba lagi.',
                'error'   => ENVIRONMENT === 'development' ? $e->getMessage() : null
            ]);
        }
    }
}