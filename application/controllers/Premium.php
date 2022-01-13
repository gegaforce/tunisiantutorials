<?php
class Premium extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('membre_m', 'm');
	}
	
	public function affiche(){
		$this->load->view('home/header' );
		$this->load->view('premium/affiche');
	}

}