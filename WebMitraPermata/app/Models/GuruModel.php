<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table            = 'guru';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['jenjang', 'nama', 'jabatan', 'foto', 'tanggal'];

    protected $useTimestamps = false;
}
