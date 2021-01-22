<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {

	public function __construct()
     {
        
          parent::__construct();
      
        if ($this->session->userdata('admin')==true){ 
            redirect('Admin');
        }
    
    }
	public function index()
	{
        
         $this->load->model('Admin_model');
          $data['firstname']=$this->Admin_model->aexists();
        
                $this->load->view('Admin/templates/head');
               
		$this->load->view('Admin/AdminLogin');
                $this->load->view('Admin/templates/footer'); 
	}
    
    public function verify(){
        
         $this->load->model('Admin_model');
         
         $check=$this->Admin_model->aexists();
        
        if($check){
            $this->session->set_userdata('admin','1');
               
             
            foreach ( $check as $row){
               $this->session->set_userdata('name',$row->firstname); 
                $this->session->set_userdata('email',$row->email); 
            }
            
        }
        else{
           echo('wrong password or number');
            
        
        }
    }
    
   
    
}
?>
