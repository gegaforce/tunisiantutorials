<?php
class Parcours extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('Parcours_p', 'p');
	}

	public function test(){
		$this->load->view('home/header');
		echo"<h1>Testification</h1>";
	}
	
	public function afficherParcours(){
		$this->load->view('home/header');
		$this->load->view('project/afficherProject');
	}

	public function addParcours(){
		$this->load->view('home/header');
		$this->load->view('parcours/addParcours');
	}
	
	public function deleteparcours(){
		
	}
	public function updateparcours(){
		
	}
	
	public function ajouterparcours(){
		$definition = $_POST['definition'];
		$title = $_POST['title'];
		
		//upload image;
		$sourcePath = $_FILES['file']['tmp_name'];   
		$logo = $_FILES['file']['name'];
		$targetPath = 'assets/images/logos/'.$_FILES['file']['name']; 
		move_uploaded_file($sourcePath,$targetPath);
		$this->p->ajouterParcours($title, $logo, $definition);
		echo img_url('logos/'.$_FILES['file']['name']);
		//echo '<img src="'.img_url("logo/".$_FILES['file']['name']).'"/>';
	}
	
	public function addTemplate(){
		$this->load->view('home/header',true);
		$this->load->view('parcours/template' );
	}





}