<?php
class Article extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		
	}

	public function article($article){
		
		$this->load->view('home/header',true);
		$this->load->view('articles/'.$article);
		$this->load->view('home/footer');
		
	}
	
	public function ecrirearticle(){
		$this->load->view('home/header',true);
		$this->load->view('writer/writerArticle');
		$this->load->view('home/footer');		
	}

	public function createTitle($nbCaractere)
		{
			$password = "";
			for($i = 0; $i <= $nbCaractere; $i++)
			{
				$random = rand(97,122);
				$password .= chr($random);
			}
	 
			return $password;
		}
	public function intelligence_artificielle(){
		
		$this->load->view('home/header',true);
		$this->load->view('ia/artificial_intelligence');
		$this->load->view('home/footer');
		
	}

	public function frontend_before_coding()
	{
		$this->load->view('home/header',true);
		$this->load->view('articles/frontend');
		$this->load->view('home/footer');
	}

	public function agileinlines()
	{
		$this->load->view('home/header',true);
		$this->load->view('articles/agileinlines');
		$this->load->view('home/footer');
	}

	public function coding()
	{
		$this->load->view('home/header',true);
		$this->load->view('articles/coding');
		$this->load->view('home/footer');
	}
}