<?php

namespace App\Models;

use CodeIgniter\Model;

class Regismodel extends Model
{
    protected $table = 'registration';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_lengkap', 'NIK', 'jenis_kelamin', 'tanggal_lahir', 'no_telepon', 'alamat', 'tanggal_vaksin', 'jenis_vaksin', 'periode_vaksin', 'tanggal_vaksin_kedua'];

    public function getUsers()
    {
        return $this->findAll();
    }
}
