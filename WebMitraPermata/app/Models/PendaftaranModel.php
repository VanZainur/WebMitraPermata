<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id';

    // kolom yang boleh di-insert
    protected $allowedFields = [
        'nama',
        'alamat',
        'asal_sekolah',
        'no_hp',
        'jurusan',
        'created_at'
    ];

    // tidak pakai timestamps otomatis biar aman
    protected $useTimestamps = false;
}
