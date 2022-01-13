<?php
class Recruiter extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('course_c', 'c');
	}
	
	public function ajouterOffre()
	{
		$this->load->view('recruiter/ajouterOffre' );
	}
	
	public function seConncter(){
		
	}
	
	public function modifierOffre(){}
	
	public function supprimerOffre(){}
	
}
