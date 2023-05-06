<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prediction extends CI_Controller {

	public function index()
	{
		$this->load->view('main_content/prediction_content');
	}
    public function reponse()
	{
		$this->load->view('main_content/reponse_content');
	}
    public function solution()
	{
		$this->load->view('main_content/choix_solution_content');
	}			
}

?>