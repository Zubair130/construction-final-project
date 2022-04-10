<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users_Model extends CI_Model
{
    public function userRegistration($data){
        $this->db->insert('tbuser',$data);
    }



    public function loginUser($email, $password){


        // $query = $this->db->get_where('login', ['user_name' => $email, 'password' => $password]);
        // $row = $query->row();

        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('tbuser');
        if($query ->num_rows > 0){
            return $query;
            //return true;
        }
        else{
            return false;
        }

    }
    public function listAllUsers()
    {
       $query =  $this->db->get('tbuser'); 
       return $query->result();

    //    $row = $query->result();
    //    if($row){
    //     return $row ;
    //     //return true;
    //    }
    }

    
}