<?php
class Admin extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('membre_m', 'm');
		$this->load->model('parcours_p', 'p');
		
		$this->load->model('course_c', 'c');
		
	}
	
	public function accueil(){
		$this->load->view('home/header',true);
		$data['courses'] = $this->c->courses_all();
		//var_dump($data['courses']);die;
		$data['cours'] = $this->c->cous_all();
		//var_dump($data['cours']);die;
		
		$this->load->view('admin/accueil', $data);
	}
	
	public function parcours(){
				$this->load->view('home/header',true);
		//$data['courses'] = $this->c->courses_all();
		//var_dump($data['courses']);die;
		//$data['cours'] = $this->c->cous_all();
		//var_dump($data['cours']);die;
		
		$this->load->view('admin/parcours');
	}
	public function notification()
	{
		//$result = $this->m->addNotification();
	}
	
	public function notif()
	{
		//$this->m->showNotification();
	}
	
	public function success()
	{
		$this->accueil($value);
	}
	public function envoyerMail()
	{
		
		$this->load->library('email');
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_user'] = 'b7_22523934';
		$config['smtp_pass'] = 'TheyNever';
		$config['smtp_port'] = 25;
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		
		//$this->email->initilize($config);
		
		$this->email->from("mustapha.yahyaoui7@gmail.com");
		$this->email->to("mustapha_yahyaoui@live.fr");
		$this->email->subject("codeIgniter send email");
		$this->email->message("hello mail");
		
		
		if($this->email->send()){
			echo "E-mail has been sent. Thank you.";
		} else{
			echo $this->email->print_debugger();
		}

	}
	
	public function gererBaseDeDonnees(){
		require_once(APPPATH.'controllers/DataBase.php'); 
		$database =  new DataBase();
		$database->gerer();
	}
		public function gererparcours(){
		$data['test'] = "Mustapha";
		// $this->load->view('parcours/parcoursadmin',$data);
		echo "<h1>testifocation</h1>";
	}
	
	//les fonctions de gestion des parcours.
	
	public function ajouterParcours(){
		$title = $_POST['nom'];
		$definition = $_POST['paragraph'];
		//$src = $_POST['image'];
		//upload image
		$sourcePath = $_FILES['image']['tmp_name'];       
		$targetPath = 'assets/images/'.$_FILES['image']['name']; 
		$src = $_FILES['image']['name']; ;
		move_uploaded_file($sourcePath,$targetPath);
		$this->p->ajouterParcours($title, $src, $definition);
		$this->afficherAllParcours();
		
		
	}
	
	public function afficherAllParcours(){
		$tableau  = $this->p->afficherAllPArcours();
		//$data['tableau'] = $tableau;
		foreach($tableau as $key=>$value){
			$parcours = $tableau[$key];
			$data['parcours'] = $parcours;
			$this->load->view('parcours/afficherParcours',$data);
		}
		
	}
	public function supprimerParcours(){
		$id = $_POST['id'];
		$this->p->deleteparcours($id);
		$this->afficherAllParcours();
	}
	public function modifierParcours(){
		
	}
	
}