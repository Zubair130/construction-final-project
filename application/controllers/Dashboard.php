<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //  check for sessions of log-in user
        if (!checkSession()) {
            redirectPreviousurl();
        }
    }
    public function index()
    {
        $this->load->view('dashboard');
    }
    public function addUser(){
        $this->load->view('admin/user/adduser');
    }
    public function viewUser()
    {
        $this->load->view('admin/user/userlist');
    }
    public function addusersite()
    {
        $this->load->view('admin/sites/addsite');
    }



}