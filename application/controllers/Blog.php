<?php

class Blog extends CI_Controller {
    public function index($nama, $golDarah, $alamat)
    {
       $data['nama'] = $nama;
       $data['golDarah'] = $golDarah;
       $data['alamat'] = $alamat;
       
       $this->load->view("blog", $data);
    }
}