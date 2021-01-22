<?php
class Admin_model extends CI_Model{
    
    public function __construct() {
        $this->load->database();
    }
    function load(){
      
        $query=$this->db->query("SELECT * FROM SF_ADMIN_TABLE");
        return $query->result_array();
    }
    
    
    function exists(){
       $this->session->set_userdata('phone_number',$this->input->post('phone')); 
        $this->session->set_userdata('password',$this->input->post('password'));
      $arr['phone_number'] =$this->session->userdata('phone_number');
        $arr['password']=md5($this->session->userdata('password'));
        return $this->db->get_where('SF_ADMIN_TABLE',$arr)->result();
           
    }
    function getUserDetails(){
         $telephone =$this->session->userdata('phone_number');
     return  $this->db->query("SELECT * FROM SF_ADMIN_TABLE WHERE phone_number =".$telephone)->result_array();
            
    }
    function aexists(){
      $this->session->set_userdata('adphonenumber',$this->input->post('adminphone')); 
        $this->session->set_userdata('adpassword',$this->input->post('adminpassword'));
      $arr['phonenumber'] =$this->session->userdata('adphonenumber');
        $arr['password']=md5($this->session->userdata('adpassword'));
        return $this->db->get_where('SF_ADMIN_NEW',$arr)->result();
        
    }
  
    function insert($data){
        $this->db->insert('SF_ADMIN_TABLE',$data);
        
    }
    function insertadmin($data){
        $this->db->insert('SF_ADMIN_NEW',$data);
        
    }
   
   
    function insertHistory($data){
        $this->db->insert('SF_HISTORY',$data);
   }
    function getHistory(){
         $telephone =$this->session->userdata('phone_number');
     return  $this->db->query("SELECT * FROM SF_HISTORY WHERE phone =".$telephone)->result_array();
            
    }
    function getmessage(){
      $telephone =$this->session->userdata('phone_number');
     return  $this->db->query("SELECT * FROM SF_MESSAGE WHERE phone =".$telephone)->result_array();   
    }
    function getLoan(){
      $telephone =$this->session->userdata('phone_number');
     return  $this->db->query("SELECT * FROM SF_ADMIN_TABLE WHERE phone_number =".$telephone)->result_array();   
    }
    function getSchedule(){
      $telephone =$this->session->userdata('phone_number');
     return  $this->db->query("SELECT * FROM SF_SCHEDULE WHERE phone =".$telephone)->result_array();   
    }
    function getTools(){
      $id=1;
     return  $this->db->query("SELECT * FROM SF_TOOL WHERE id =".$id)->result_array();   
    }
    function insertMessage($data){
        $this->db->insert('SF_MESSAGE',$data);
   }
     function insertSchedule($data){
       $this->db->where('phone',$this->input->post('phone'));
         $this->db->update('SF_SCHEDULE',$data); 
     }
    function updateprofile($data){
        $telephone =$this->session->userdata('phone_number');
       $this->db->where('phone_number',$telephone);
         $this->db->update('SF_ADMIN_TABLE',$data); 
     }
    function insertsched($data){
        $this->db->insert('SF_SCHEDULE',$data);
   }
    function insertTools($data){
     
        $this->db->where('id',1);
         $this->db->update('SF_TOOL',$data);
   
   } 
    
    function delete($data){
$this->db->where('phone_number', $data);
$this->db->delete('SF_ADMIN_TABLE');
}
}

?>