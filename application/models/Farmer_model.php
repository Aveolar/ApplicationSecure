<?php
class Farmer_model extends CI_Model{
    
    public function __construct() {
        $this->load->database();
    }
    
    
    function exists(){
       $this->session->set_userdata('phone_number',$this->input->post('telephone')); 
        $this->session->set_userdata('password',$this->input->post('passcode'));
      $arr['phone_number'] =$this->session->userdata('phone_number');
        $arr['password']=md5($this->session->userdata('password'));
        return $this->db->get_where('SF_ADMIN_TABLE',$arr)->result();
        
        
    }
  
}
?>