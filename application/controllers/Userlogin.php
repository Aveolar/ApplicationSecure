<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Controller {

	public function __construct()
     {
          parent::__construct();
         
        if ($this->session->userdata('farmer')==true){ 
            redirect('Dashboard');
        };
     }
	public function index()
	{
                $this->load->view('Login/templates/head');
                $this->load->view('Login/templates/header');
		$this->load->view('Login/Userlogin');
                $this->load->view('Login/templates/footer');  

	}
   
    public function verify_farmers(){
         $this->load->model('Farmer_model');
         $check=$this->Farmer_model->exists();
        if($check){
             $this->session->set_userdata('farmer','1');
      
            foreach($check as $row){
                $firstname=$row->first_name;
                $surname=$row->surname;
                $email=$row->email;
                $phone=$row->phone_number;
            $group=$row->farmer_group;
             $this->session->set_userdata('firstname',$firstname);  
                $this->session->set_userdata('surname',$surname); 
                 $this->session->set_userdata('email',$email);  
                $this->session->set_userdata('phone',$phone);
                $this->session->set_userdata('group',$group);
            }
           redirect('Dashboard');
        }
        else{
            redirect('userlogin');
        }
    }
}
?>
