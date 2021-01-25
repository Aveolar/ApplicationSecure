<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct()
     {
          parent::__construct();
     }
	public function index()
	{
                $this->load->view('home/templates/head');
                $this->load->view('home/templates/header');
		$this->load->view('home/landing');
                $this->load->view('home/templates/footer');  

	}
}
