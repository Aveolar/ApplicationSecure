
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
     {
          parent::__construct();
         if ($this->session->userdata('admin')==false){ 
            redirect('Adminlogin');
        };
        
     }
	public function index()
	{
                $this->load->view('Login/templates/head');
                $this->load->view('Login/templates/header');
		$this->load->view('Login/Userlogin');
                $this->load->view('Login/templates/footer');  

	}
    public function verify(){
         $this->load->model('Admin_model');
         $check=$this->Admin_model->exists();
        if($check){
            $this->session->set_userdata('admin','1');
            
           redirect('Admin');
        }
        else{
            redirect('Admin/login');
        }
    }
    public function verify_farmers(){
         $this->load->model('Farmer_model');
         $check=$this->Farmer_model->exists();
        
             $this->session->set_userdata('farmer','1');
           redirect('Dashboard');
        }
        else{
            redirect('Login');
        }
    }
}
