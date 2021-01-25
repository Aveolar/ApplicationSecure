
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
     {
          parent::__construct();
     }
	public function index()
	{
                $this->load->view('Login/templates/head');
                $this->load->view('Login/templates/header');
		$this->load->view('Login/Userlogin');
                $this->load->view('Login/templates/footer');  

	}
}
