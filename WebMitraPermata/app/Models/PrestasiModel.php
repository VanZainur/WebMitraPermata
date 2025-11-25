<?php

namespace App\Models;

use CodeIgniter\Model;

class PrestasiModel extends Model
{
    protected $table            = 'prestasi';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['jenjang', 'judul', 'deskripsi', 'gambar', 'tanggal'];

    protected $useTimestamps = false;
}
