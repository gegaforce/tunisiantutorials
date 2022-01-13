<?php

/**
* 
*/
class Autoload extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();		
	}

	public function index()
	{
		$data['auto'] = 'autos';
		$this->load->view('autoload',$data);
	}
}