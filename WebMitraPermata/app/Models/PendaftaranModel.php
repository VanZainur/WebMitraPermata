<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama',
        'alamat',
        'asal_sekolah',
        'no_hp',
        'jurusan',
        'jenjang',
        'created_at'
    ];

    protected $useTimestamps = false;
}
