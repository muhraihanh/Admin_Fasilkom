<?php

namespace App\Controllers;

// untuk menggunakan model database
use App\Models\KomikModel;


class Login extends BaseController
{
    // $komikModel bisa digunakan di seluruh class Komik ini
    // protected $komikModel;
    // protected $loginModel;

    public function __construct()
    {
        // atau bisa begini : $komikModel = new App\Models\KomikModel();
        // $this->komikModel = new KomikModel();
        // $this->loginModel = new LoginModel();
    }

    public function login()
    {
        return view('login');
    }
    public function prosesLogin()
    {
    }
}
