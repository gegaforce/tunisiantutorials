<?php
class Forum extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		//$this->load->model('Forum_c', 'c');
	}
	
	public function create(){
		$this->load->view('home/header',true);
		$this->load->view('forum/create');
		$this->load->view('home/footer');
	}
	
	public function update(){
		
	}
	
	public function read(){
		
	}
	
	public function delete_sujet(){
		
	}
}