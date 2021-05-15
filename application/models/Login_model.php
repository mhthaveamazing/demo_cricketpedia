<?php
class Login_model extends CI_Model{
 function __construct() {
        parent::__construct();
        $this->load->database();
    }

function validate($email,$password){
    
  $this->db->where('email',$email);
  $this->db->where('password',md5($password));
  $result = $this->db->get('users');
  return $result->row_array();
}
  

function signup(){
    

  $arr1=$this->input->post();
         
      
  $this->db->where('mobile',$arr1['mobile']);
  $queryResult=$this->db->get('users');  
  $foundRows = $queryResult->num_rows();
 
  if($foundRows >= 1) {
    echo "You are already registered";
  }else{
            
      $arr = Array(
             'name'  => $arr1['name'],
             'mobile'  => $arr1['mobile'],
             'password' => md5($arr1['password']),
             'email'    => $arr1['email'],

      );
      $this->db->insert('users',$arr);
      }
}









    
} 
 ?>