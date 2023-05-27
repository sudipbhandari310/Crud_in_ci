<?php

class Auth_model extends CI_model{

//save users record in database
    public function create($formArray){
    $this->db->insert('users',$formArray);
    } 
//this method will return a row array based on returned array
    public function checkUser($email){
        $this->db->where('email',$email);
        return $row=$this->db->get('users')->row_array();


    }

    //check user authorization
      function authorization(){
        $user=$this->session->userdata('user');
        if(!empty($user)){
            return true;
        }
        else {
            return false;
        }
      }
}