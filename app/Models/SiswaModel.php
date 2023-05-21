<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'tabel_siswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'kelas', 'tanggal_lahir', 'alamat'];
}
