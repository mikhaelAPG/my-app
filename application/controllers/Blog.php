<?php

class Blog extends CI_Controller {
    public function index($nama, $golDarah, $alamat)
    {
        echo "Selamat Datang $nama <br>";
        echo "Golongan Darah Anda $golDarah <br>";
        echo "Anda tinggal di alamat $alamat <br>";
    }
}