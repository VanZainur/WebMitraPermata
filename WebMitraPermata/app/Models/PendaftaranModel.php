<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'jenjang',
        'nama',
        'nama_panggilan',      // ✅ Field khusus TK
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'anak_ke',             // ✅ Field khusus TK
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',      // ✅ Field khusus TK
        'pekerjaan_ibu',       // ✅ Field khusus TK
        'agama',
        'alamat',
        'no_hp',
        'asal_sekolah',
        'jurusan',
        'created_at'
    ];
    
    protected $useTimestamps = false;
    
    // ✅ Validasi MINIMAL - Hanya yang wajib untuk SEMUA jenjang
    protected $validationRules = [
        'nama'     => 'required|min_length[3]|max_length[150]',
        'no_hp'    => 'required|regex_match[/^08[0-9]{8,13}$/]',
        'jenjang'  => 'required|in_list[smk,smp,sd,tk]',
    ];
    
    protected $validationMessages = [
        'nama' => [
            'required'   => 'Nama lengkap harus diisi',
            'min_length' => 'Nama minimal 3 karakter',
        ],
        'no_hp' => [
            'required'    => 'Nomor WhatsApp harus diisi',
            'regex_match' => 'Nomor harus diawali 08 dan minimal 10 digit'
        ],
        'jenjang' => [
            'required' => 'Jenjang harus diisi',
            'in_list'  => 'Jenjang tidak valid'
        ]
    ];

    /**
     * Get pendaftaran berdasarkan jenjang
     */
    public function getByJenjang($jenjang, $limit = null, $offset = null)
    {
        $builder = $this->where('jenjang', $jenjang)
                        ->orderBy('created_at', 'DESC');
        
        if ($limit) {
            $builder->limit($limit, $offset);
        }
        
        return $builder->findAll();
    }

    /**
     * Count pendaftaran berdasarkan jenjang
     */
    public function countByJenjang($jenjang)
    {
        return $this->where('jenjang', $jenjang)->countAllResults();
    }

    /**
     * Get statistik pendaftaran semua jenjang
     */
    public function getStatistics()
    {
        return [
            'smk' => $this->countByJenjang('smk'),
            'smp' => $this->countByJenjang('smp'),
            'sd'  => $this->countByJenjang('sd'),
            'tk'  => $this->countByJenjang('tk'),
            'total' => $this->countAll()
        ];
    }

    /**
     * Get pendaftaran terbaru
     */
    public function getLatest($limit = 10)
    {
        return $this->orderBy('created_at', 'DESC')
                    ->limit($limit)
                    ->findAll();
    }

    /**
     * Cari pendaftaran
     */
    public function search($keyword, $jenjang = null)
    {
        $builder = $this->like('nama', $keyword)
                        ->orLike('no_hp', $keyword)
                        ->orLike('alamat', $keyword);
        
        if ($jenjang) {
            $builder->where('jenjang', $jenjang);
        }
        
        return $builder->orderBy('created_at', 'DESC')->findAll();
    }

    /**
     * Get detail requirement per jenjang (untuk informasi di admin panel)
     */
    public function getRequiredFields($jenjang)
    {
        $base = ['nama', 'no_hp'];
        
        $requirements = [
            'smk' => array_merge($base, [
                'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
                'nama_ayah', 'nama_ibu', 'agama', 'alamat', 'jurusan'
            ]),
            'smp' => array_merge($base, [
                'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
                'nama_ayah', 'nama_ibu', 'agama', 'alamat'
            ]),
            'sd' => array_merge($base, [
                'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
                'nama_ayah', 'nama_ibu', 'alamat'
            ]),
            'tk' => array_merge($base, [
                'nama_panggilan', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
                'anak_ke', 'nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 
                'pekerjaan_ibu', 'agama', 'alamat'
            ])
        ];
        
        return $requirements[$jenjang] ?? $base;
    }

    /**
     * Get display name untuk field (untuk admin panel)
     */
    public function getFieldLabels()
    {
        return [
            'nama'            => 'Nama Lengkap',
            'nama_panggilan'  => 'Nama Panggilan',
            'tempat_lahir'    => 'Tempat Lahir',
            'tanggal_lahir'   => 'Tanggal Lahir',
            'jenis_kelamin'   => 'Jenis Kelamin',
            'anak_ke'         => 'Anak Ke-',
            'nama_ayah'       => 'Nama Ayah',
            'nama_ibu'        => 'Nama Ibu',
            'pekerjaan_ayah'  => 'Pekerjaan Ayah',
            'pekerjaan_ibu'   => 'Pekerjaan Ibu',
            'agama'           => 'Agama',
            'alamat'          => 'Alamat',
            'no_hp'           => 'No. WhatsApp',
            'asal_sekolah'    => 'Asal Sekolah',
            'jurusan'         => 'Jurusan'
        ];
    }
}