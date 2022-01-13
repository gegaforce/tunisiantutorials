<style>
#content{
	width: 170px;
	min-height:100%;
	margin: 0 auto;
	padding:20px;
}
</style>
<div id='content'>
<?php 
	$this->load->helper('form');
	echo form_open('Membre/accueil');
	
	echo form_label("Name: ","pseudo");
	$data = array(
		"name" => "pseudo",
		"id" => "pseudo",
		"value" => ""
	);
	echo form_input($data);
	
	echo form_label("Email: ","email");
	$data = array(
		"name" => "email",
		"id" => "email",
		"value" => ""
	);
	echo form_input($data);
	
	echo form_label("Password: ","password");
	$data = array(
		"name" => "password",
		"id" => "password",
		"value" => ""
	);
	echo form_password($data);
	
	echo form_label("Confirm: ","confirm");
	$data = array(
		"name" => "confirm",
		"id" => "confirm",
		"value" => ""
	);
	echo form_password($data);
	
	echo form_submit("contactSubmit", "Send");
	
	echo form_close();