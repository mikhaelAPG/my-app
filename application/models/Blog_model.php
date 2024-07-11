<?php
class Blog_model extends CI_Model 
{
	public function index()
	{
		$this->load->database();
		$this->load->model('Blog_model');
        $data['blogs']=$this->Blog_model->getBlogs();
        $this->load->view('blogs',$data);
	}
    public function detail($url)
	{
		$this->load->database();
		$this->load->model('Blog_model');
        $data['blogs']=$this->Blog_model->getSingleBlog($url);
		$this->load->view('detail',$data);
	}
}
?>