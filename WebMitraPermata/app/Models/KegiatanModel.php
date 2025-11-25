<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table            = 'kegiatan';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['jenjang', 'judul', 'deskripsi', 'gambar', 'tanggal'];

    protected $useTimestamps = false;
}
