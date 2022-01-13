<?php
class DataBase extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('database_m', 'database');		
	}
	
	public function gerer(){
		echo "Hello gerer function from Admin to DataBase";
	}
}