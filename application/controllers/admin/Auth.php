<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('Auth/login');
	}
  
  public function signup(){
    $this->load->view('Auth/register');
  }
  public function logout(){
    // $this->session->sess_destroy();
    return redirect(site_url('login'));
  }
  public function recover_password(){
    
  }

}
