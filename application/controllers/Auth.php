<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    
    parent::__construct();
    $this->load->model('Auth_model');
    $this->load->library('form_validation');


  }
public function index(){
  $this->load->view('login');

}

function dashboard(){
   if($this->Auth_model->authorization()==false){
     $this->session->set_flashdata('msg','you are not authorized to access this section');
            redirect(base_url().'auth/login');

   }
  $user=$this->session->userdata('user');
  $data['user']=$user;

  $this->load->view('dashboard',$data);
}
  

   function login()
   {
    $this->form_validation->set_rules('email','Email address','required|valid_email');
    $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run() == false){
      $this->load->view('login');
      }else
      {
    $email= $this->input->post('email');
    $user = $this->Auth_model->checkUser($email);
  

    if($user) {
      $password=$this->input->post('password');
     // var_dump($password);

 
        
     

       if (password_verify($password,$user['password']) == true){
         $formArray=array();

        $formArray['id']=$user['id'];
        $formArray['first_name']=$user['first_name'];
        $formArray['last_name']=$user['last_name'];
        $formArray['email']=$user['email'];
      // // var_dump($formArray);

         $this->session->set_userdata('user',$formArray);
        // $this->load->view('dashboard');

      redirect(base_url().'auth/dashboard');

      //  } 
         // $this->session->set_flashdata('msg','Email or passoword is incorrect ');
          // redirect(base_url().'index.php/auth/login');
     //  $this->load->view('login');

      }else{
        $this->session->set_flashdata('msg','Email or passoword is incorrect ');
       redirect(base_url().'index.php/auth');

      }

        }
      }

  // else{
    
   //   
      // redirect(base_url().'index.php/auth/login');
  
    
     function register(){


   $this->form_validation->set_rules('first_name','First name','required');
   $this->form_validation->set_rules('last_name','Last Name','required');
   $this->form_validation->set_rules('email','Email','required|is_unique[users.email]');
   $this->form_validation->set_rules('phone','Phone','required');
   $this->form_validation->set_rules('password','Password','required');

   if($this->form_validation->run() == false){
    
      $this->load->view('register');
      
    } 

   else{
     
      $formArray=array();
      $formArray['first_name']=$this->input->post('first_name');
      $formArray['last_name']=$this->input->post('last_name');
      $formArray['email']=$this->input->post('email');
      $formArray['phone']=$this->input->post('phone');
      $formArray['password']=password_hash($this->input->post('password'),PASSWORD_BCRYPT);
      $formArray['created_at']=date(format:'Y-m-d H:i:s');
      $this->Auth_model->create($formArray);


    $this->session->set_flashdata('msg','Your account has been created successfully'); 
     redirect (base_url().'Auth');
    
   

}

}

function logout(){
  $this->session->unset_userdata('user');
  redirect('auth/login');
}
}
}