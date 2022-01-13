<?php
class Project extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('course_c', 'c');
	}

	public function test(){
		$this->load->view('home/header');
		echo"<h1>Testification</h1>";
	}
	
	public function afficherProject(){
		$this->load->view('home/header');
		$this->load->view('project/afficherProject');
	}

	public function ajouterProject(){
		$this->load->view('home/header');
		$this->load->view('project/addProject');
	}

	public function afficherListeCommentaire(){
		
	}
	
	public function finirLaRealisationDeProjet(){
		
	}



}	