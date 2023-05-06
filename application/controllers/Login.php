<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('main_content/login_content');
		//redirect('main_content/login_content');
	}	
	public function inscription()
	{
		$this->load->view('main_content/signup_content');
		//redirect('main_content/login_content');
	}		
}

?>