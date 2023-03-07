<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    // sesuai nama tabel di database

    protected $table = 'komik';
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    // variabel untuk menentukan field mana saja yang harus diinput user, karena ada field yang tidak harus diisi oleh user seperti id, created at, dan updated at
    protected $allowedFields = ['judul', 'slug', 'penerbit', 'penulis', 'sampul'];

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug]);
    }
}
