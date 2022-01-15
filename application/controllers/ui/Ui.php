<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ui extends CI_Controller {


	public function index()
	{
		$this->load->view('main');
	}


	public function buttons(){
    $this->load->view('ui-features/buttons');
		
	}
	
}
