<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
     {
        
        
          parent::__construct();
       
      // if ($this->session->userdata('admin')==false){ 
           // redirect('Admin');
       // }
        
     }
    
    public function manageUsers(){
        $this->load->model('Admin_model');
        
        $data['view_users']=$this->Admin_model->load();
                $this->load->view('Admin/templates/head',$data);
                $this->load->view('Admin/templates/header',$data);
                $this->load->view('Admin/templates/sidenav',$data);
		        $this->load->view('Admin/manageUsers',$data);
                $this->load->view('Admin/templates/footer',$data); 

	}
    
    
	public function index(){
        $this->load->model('Admin_model');
        
        $data['view_users']=$this->Admin_model->load();
                $this->load->view('Admin/templates/head',$data);
                $this->load->view('Admin/templates/header',$data);
                $this->load->view('Admin/templates/sidenav',$data);
		        $this->load->view('Admin/AdminDashboard',$data);
                $this->load->view('Admin/templates/footer',$data); 

	}
    
        
    
    
    public function InsertTable(){
        $save= array(
            
        'first_name'=>       $this->input->post('firstname'),
        'surname'=>          $this->input->post('surname'),
        'email'=>            $this->input->post('email'),
        'phone_number'=>    $this->input->post('phone'),
        'username'=>        $this->input->post('username'),
        'password'=>        md5($this->input->post('password')),
        'farmer_group'=>    $this->input->post('group'),
            'loan'=> $this->input->post('loan'),
        
        );
        $this->load->model('Admin_model');
        $this->Admin_model->insert($save);
        echo("saved succesfully");
        
    }
      public function InsertadminTable(){
        $save= array(
            
        'firstname'=>       $this->input->post('adfirstname'),
        'surname'=>          $this->input->post('adsurname'),
        'email'=>            $this->input->post('ademail'),
        'phonenumber'=>    $this->input->post('adphone'),
        'password'=>        md5($this->input->post('adpassword')),
        
        
        );
        $this->load->model('Admin_model');
        $this->Admin_model->insertadmin($save);
        echo("saved succesfully");
        
    }
    public function InsertMessage(){
         $p=$this->input->post('p');
        $t=$this->input->post('t');
        $s=$this->input->post('s');
        $save= array(
           
            'subject'=>$s,
            'message'=>$t,
            'phone'=>$p,
            );
          $this->load->model('Admin_model');
        $this->Admin_model->insertMessage($save);
         echo("sent succesfully!"); 
    }
    
    public function InsertSchedule(){
         $f=$this->input->post('scfertilize');
        $w=$this->input->post('scweed');
        $wa=$this->input->post('scwater');
        $phone=$this->input->post('phone');
        $save= array(
           
            'fertilize'=>$f,
            'weed'=>$w,
            'phone'=>$phone,
            'water'=>$wa,
            );
          $this->load->model('Admin_model');
        $this->Admin_model->insertSchedule($save);
         echo("updated succesfully!");
        echo($f);
    }
    public function InsertnewSchedule(){
         $f=$this->input->post('scfertilize');
        $w=$this->input->post('scweed');
        $wa=$this->input->post('scwater');
        $phone=$this->input->post('phone');
        $save= array(
           
            'fertilize'=>$f,
            'weed'=>$w,
            'phone'=>$phone,
            'water'=>$wa,
            );
          $this->load->model('Admin_model');
        $this->Admin_model->insertsched($save);
         echo("updated succesfully!");
        echo($f);
    }
    
    
    public function InsertTools(){
         $t=$this->input->post('tractor');
        $s=$this->input->post('seed');
        $l=$this->input->post('labor');
        
        $save= array(
           
            'tractor'=>$t,
            'seed'=>$s,
            'labour'=>$l,
            
            );
          $this->load->model('Admin_model');
        $this->Admin_model->insertTools($save);
         echo("updated succesfully!");
        
    }
    public function Delete(){
        
        $delete=$this->input->post('phonenum');
          $this->load->model('Admin_model');
        $this->Admin_model->delete($delete);
        echo('deleted succesfully');
        
    }


}
