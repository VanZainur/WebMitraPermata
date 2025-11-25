<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table            = 'berita';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['jenjang', 'judul', 'deskripsi', 'gambar', 'tanggal'];

    protected $useTimestamps = false;
}
