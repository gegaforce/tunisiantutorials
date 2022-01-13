<?php
class Course extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('course_c', 'c');
	}

	public function ajouterProjet(){
		$this->load->view('project/addProject');
	}
	
	public function repondreUnProjet($projet){
		
	}
	
	public function afficherListeDesReponse(){
		
	}
	
	public function afficherListeDesProjets(){
		
	}
	
	public function ajouterAListeDeProjet(){
		
	}
	
	
}