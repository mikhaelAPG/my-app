<?php

class Blog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
    }

    public function index()
	{
        $query = $this->db->get("blog");
        $data['blogs'] = $query->result_array(); 
        
        $this->load->view('blog', $data);
	}

    public function detail($url)
    {
        $query = $this->db->query('SELECT * FROM blog WHERE url = "'.$url.'"');
        $data['post'] = $query->row_array();

        $this->load->view('detail', $data);
    }
}