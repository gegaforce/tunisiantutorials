<?php
class EditeurDeTexteCours extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('membre_m', 'm');
	}
	
	public function ajouterTitreDeCours(){
		
	}
	
	public function ajouteDescription(){
		
	}
	
	public function afficherEditeurDeTexte(){
		
	}
	
	public function saveParagraphe(){
		
	}
	
	public function ajouterPuce(){}
	public function ajouterNumerotation(){}
	
	public function ajouterBold(){}
	public function supprimerBold(){}
	
	public function ajouterItalic(){}
	public function supprimerItalic(){}
	
	public function ajouterImage(){}
	
	public function ajouterTable(){}
	
	public function ajouterInformation(){}
	
	public function ajouterAttention(){}
	
	public function ajouterErreur(){}
	
	public function ajouterQuestion(){}
	
	public function ajouterConsole(){}
	
	public function ajouterCode(){}
	public function supprimerCode(){}
	public function modifierCode(){}
	
	
}
