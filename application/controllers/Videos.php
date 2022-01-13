<?php
class Videos extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('video_v', 'v');
	}
	public function upload(){
		
	}
	
	public function watch($title){
		$title = urldecode($title);
		//var_dump($title);die;
		$data['title'] = $title;
		$this->load->view('home/header',true);
		$this->load->view('videos/watch',$data);
	}
}