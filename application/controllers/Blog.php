<?php

class Blog extends CI_Controller {
    public function index()
	{
        $this->load->database();
		$query=$this->db->query("select * from blog");
		$data['blogs']=$query->result_array();
        $this->load->view('blog',$data);
	}
}