<?php
class Membre extends CI_Controller 
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('membre_m', 'm');
		session_start();
	}
	
	public function showAllMembre(){
		$result = $this->m->showAllMembre();
		echo json_encode($result);
	}
	
	public function addMembre(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$result = $this->m->addMembre($email,$password);
		
	}
	
	public function accueil()
	{
		$result = $this->addMembre();
		$this->load->view('php/header',true);
		$this->load->view('php/phpandmysql');
		$this->load->view('php/footer');
	}
	
	public function article(){
		$this->load->view('articles/article');
	}
	
	public function connexion(){
		session_start();
		
		$_SESSION['mail'] =$_POST['exampleInputEmail1'];
		
		if(isset($_SESSION['mail']) && $_SESSION['mail'] != null){
			$this->load->view('home/header');
			$this->espace();
		}else{
			$this->load->view('home/header');
		}
		
		
		
		
	}
	
	public function deconnexion(){
		if(!session_id()) {
			session_start();
			unset($_SESSION['mail']);
 			$this->load->view('home/header');
			session_destroy();
		}

		
	}
	
	public function sinscrire(){
		$this->load->view('home/header');
		$this->load->view('membre/sinscrire');
	}
	
	public function espace(){
		$this->load->view('membre/espace');
	}
	
	public function ecrirecours(){
		$data = null;
		//$this->load->view('home/header',$data);
		$this->load->view('writer/ecrireCours');
	}
}