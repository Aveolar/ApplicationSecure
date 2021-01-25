<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
     {
          parent::__construct();
     }
	public function index()
	{
                $this->load->view('Dashboard/templates/head');
                $this->load->view('Dashboard/templates/header');
                 $this->load->view('Dashboard/templates/sidenav');
		$this->load->view('Dashboard/userDashboard');
                $this->load->view('Dashboard/templates/footer'); 

	}
public function Finance(){
         $this->load->view('Dashboard/templates/head');
                $this->load->view('Dashboard/templates/header');
                 $this->load->view('Dashboard/templates/sidenav');
		$this->load->view('Dashboard/userFinance');
                $this->load->view('Dashboard/templates/footer'); 
     }
public function profile(){
         $this->load->view('Dashboard/templates/head');
                $this->load->view('Dashboard/templates/header');
                 $this->load->view('Dashboard/templates/sidenav');
		$this->load->view('Dashboard/profile');
                $this->load->view('Dashboard/templates/footer'); 
     }
public function Tools(){
         $this->load->view('Dashboard/templates/head');
                $this->load->view('Dashboard/templates/header');
                 $this->load->view('Dashboard/templates/sidenav');
		$this->load->view('Dashboard/tools');
                $this->load->view('Dashboard/templates/footer'); 
     }
}
?>