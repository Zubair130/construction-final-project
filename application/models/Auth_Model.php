<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth_Model extends CI_Model
{
    public function registrationModel($data){
        $this->db->insert('tbuser',$data);
    }

    public function loginUser($email,$password){
        $query = $this->db->get_where('tbuser', ['email' => $email, 'password'=> $password]);
        $row = $query->row_array();

      // $this->db->where('email', $email);
        // $this->db->where('password', $password);
        // $query = $this->db->get('tbuser');
        if($row){
            return $row ;
            //return true;
        }
        else{
            return false;
        }

    }
}