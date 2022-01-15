<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {


	public function index()
	{
		$this->load->view('Auth/login');
	}

  public function signup(){

    $this->load->view('Auth/register');
    
  }

  public function logout(){

  }


  public function recover_password(){

  }

}
