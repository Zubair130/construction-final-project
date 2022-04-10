<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //  check for sessions of log-in user
        if (!checkSession()) {
            redirectPreviousurl();
        }
    }
   
    public function createUser()
    {
        $this->load->model('Users_Model');
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => base64_encode($this->input->post('password')),
            'roleid ' => $this->input->post('userType'),
        );
        print_r($data);
        

        $this->Users_Model->userRegistration($data);
        redirect(base_url() . "Users/inserted");


        // echo"hello";

    }
    public function inserted()
    {
        $this->load->view('admin/user/adduser');
    }

    // Show all users 
    public function viewRecord()
    {
        $this->load->model('Users_Model');
       $data['userdata'] =  $this->Users_Model->listAllUsers();
      // var_dump($data['userdata']);
       //exit;
       $this->load->view('admin/user/userlist',$data);

    }


}
