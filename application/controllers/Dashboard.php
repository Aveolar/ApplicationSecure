<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
     {
          parent::__construct();
        if ($this->session->userdata('farmer')==false){ 
            redirect('Userlogin');
        };
     }
	public function index()
	{
        $this->load->model('Admin_model');
    $data['message']=$this->Admin_model->getmessage();
        $data['schedule']=$this->Admin_model->getSchedule();
                $this->load->view('Dashboard/templates/head',$data);
                $this->load->view('Dashboard/templates/header',$data);
                 $this->load->view('Dashboard/templates/sidenav',$data);
		$this->load->view('Dashboard/userDashboard',$data);
                $this->load->view('Dashboard/templates/footer',$data); 

	}
public function Finance(){
     $this->load->model('Admin_model');
                 $data['loan']=$this->Admin_model->getLoan();
    
     $data['tool']=$this->Admin_model->getTools();
   

    $data['message']=$this->Admin_model->getmessage();
    $data['history']=$this->Admin_model->getHistory();
         $this->load->view('Dashboard/templates/head',$data);
                $this->load->view('Dashboard/templates/header',$data);
                 $this->load->view('Dashboard/templates/sidenav',$data);
		$this->load->view('Dashboard/userFinance',$data);
                $this->load->view('Dashboard/templates/footer',$data); 
     }
public function profile(){
     $this->load->model('Admin_model');
     $data['details']=$this->Admin_model->getUserDetails();
    $data['message']=$this->Admin_model->getmessage();
         $this->load->view('Dashboard/templates/head',$data);
                $this->load->view('Dashboard/templates/header',$data);
                 $this->load->view('Dashboard/templates/sidenav',$data);
		$this->load->view('Dashboard/profile',$data);
                $this->load->view('Dashboard/templates/footer',$data); 
     }
public function Tools(){
    $this->load->model('Admin_model');
    $data['message']=$this->Admin_model->getmessage();
         $this->load->view('Dashboard/templates/head',$data);
                $this->load->view('Dashboard/templates/header',$data);
                 $this->load->view('Dashboard/templates/sidenav',$data);
		$this->load->view('Dashboard/tools',$data);
                $this->load->view('Dashboard/templates/footer',$data); 
     }
    public function insert(){
       echo( $this->input->post('d'));
        echo("incorect password");
        
    }
    public function InsertHistory(){
        $d=$this->input->post('d');
        $q=$this->input->post('q');
        $a=$this->input->post('a');
        $save= array(
            'phone'=>$this->session->userdata('phone_number'),
            'description'=>$d,
            'quantity'=>$q,
            'amount'=>$a,
            );
          $this->load->model('Admin_model');
        $this->Admin_model->insertHistory($save);
         echo("added succesfully!"); 
    }
    public function Updateprofile(){
        $email=$this->input->post('inemail');
        $group=$this->input->post('ingroup');
        $phone=$this->input->post('inphone');
        $save= array(
            'phone_number'=>$phone,
            'farmer_group'=>$group,
            'email'=>$email,
            
            );
          $this->load->model('Admin_model');
        $this->Admin_model->updateprofile($save);
         $this->session->set_userdata('phone_number',$phone);
         echo("changes has been saved"); 
    }
    
   
}
?>