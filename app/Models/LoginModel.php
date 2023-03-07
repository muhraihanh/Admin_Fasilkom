<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user';

    // variabel untuk menentukan field mana saja yang harus diinput user, karena ada field yang tidak harus diisi oleh user seperti id, created at, dan updated at
    protected $allowedFields = ['name', 'password'];

    public function getUser($name = false)
    {
        if ($name == false) {
            return $this->findAll();
        }
        return $this->where(['name' => $name]);
    }
}
