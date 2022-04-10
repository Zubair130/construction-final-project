<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    // load login page
    public function index($uri = null)
    {
        $data['title'] = "Login";
        $this->load->view('login', $data);
    }
    // login page process
    public function loginProcess()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('Auth_Model');
        $encryptedPassword = base64_encode($password);
        
        $userresponse = $this->Auth_Model->loginUser($email, $encryptedPassword);
        echo $email;
        echo $password;
        echo $encryptedPassword;
       // echo $userresponse;
        var_dump($userresponse);
         print_r($userresponse);
         //exit;
        // if (password_verify($password, $userresponse['password'])) {
            

            if ($encryptedPassword == $userresponse['password']) {
            // if the user is in active
            if ($userresponse['isactive'] == 0) {
                $this->session->set_flashdata('error', 'Your account has been suspended');
                $this->session->keep_flashdata('error');
                redirect('login', 'refresh');
                // if the user is not active
            } else {
                // remember me code
                if (!empty($this->input->post('remember'))) {
                    setcookie('email', $userresponse['email'], time() + 10 * 365 * 24 * 60 * 60);
                    setcookie('password', $userresponse['password'], time() + 10 * 365 * 24 * 60 * 60);
                } else {
                    setcookie('email', '');
                    setcookie('password', '');
                }
                // used to redirect to page
                $link = explode('?redirect=', $hreflink);
                if (!empty($link[1])) {
                    $page = $link[1];
                } else {
                    
                    $page = 'dashboard';
                  
                }
                // check if the user is
                if ($userresponse['roleid'] == '1' || $userresponse['roleid'] == '2' || $userresponse['roleid'] == '3' || $userresponse['roleid'] == '4') {
                    $userid = $userresponse['userid'];
                    // activing sessions
                    $this->session->set_userdata('userid', $userresponse['userid']);
                    $this->session->set_userdata('fullname', $userresponse['fullname']);
                    $this->session->set_userdata('email', $userresponse['email']);
                    $this->session->set_userdata('contactno', $userresponse['contactno']);
                    $this->session->set_userdata('username', $userresponse['username']);
                    $this->session->set_userdata('password', $userresponse['password']);
                    $this->session->set_userdata('roleid', $userresponse['roleid']);
                    $this->session->set_userdata('userimg', $userresponse['userimg']);
                 } 
                // else {
                //     $this->session->set_userdata('userid', $userresponse['userid']);
                //     $this->session->set_userdata('fullname', $userresponse['fullname']);
                //     $this->session->set_userdata('email', $userresponse['email']);
                //     $this->session->set_userdata('contactno', $userresponse['contactno']);
                //     $this->session->set_userdata('username', $userresponse['username']);
                //     $this->session->set_userdata('password', $userresponse['password']);
                //     $this->session->set_userdata('roleid', $userresponse['roleid']);
                //     $this->session->set_userdata('userimg', $userresponse['userimg']);
                // }
                redirect($page, 'refresh');
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            $this->session->keep_flashdata('error');
            redirect('login', 'refresh');
        }
    }

    // user log-out function
    public function loggoutProcess()
    {
        $logoutarray = [
            'userid',
            'fullname',
            'email',
            'username',
            'password',
            'contactno',
            'roleid',
            'userimg',
        ];
        $this->session->unset_userdata($logoutarray);
        $this->session->set_flashdata('success', 'You have been logged out');
        $this->session->keep_flashdata('success');
        redirect('login');
    }
    // getting IP address of user whom try to login in the system
    // public function getUserIpAddr()
    // {
    //     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //         //ip from share internet
    //         $ip = $_SERVER['HTTP_CLIENT_IP'];
    //     } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //         //ip pass from proxy
    //         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //     } else {
    //         $ip = $_SERVER['REMOTE_ADDR'];
    //     }
    //     return $ip;
    // }
    // load forget password page
    public function forgetPassword()
    {
        $data['title'] = "Forget password";
        $this->load->view('forgetpassword', $data);
    }
    // forget password process
    public function forgetPasswordprocess()
    {
        $email = $this->input->post('email');
        $userresponse = $this->db->query("SELECT * FROM tbuser WHERE email = '$email'")->row_array();
        if ($userresponse) {
            if (mailTemplate($userresponse['email'], forgetpasswordMail($userresponse['userid']), "Forget password")) {
                $this->session->set_flashdata('success', 'Link is send to your email');
                $this->session->keep_flashdata('success');
            } else {
                $this->session->set_flashdata('error', 'Something went wrong');
                $this->session->keep_flashdata('error');
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid email');
            $this->session->keep_flashdata('error');
        }
        redirect('forget/password', 'refresh');
    }
    // load reset password page
    public function resetPassword($userid, $date)
    {
        $data['title'] = "Reset password";
        $data['userid'] = base64_decode(urldecode($userid));
        $t1 = strtotime(base64_decode(urldecode($date)));
        $t2 = strtotime(date('Y-m-d'));
        $diff = $t2 - $t1;
        $hours = $diff / (60 * 60);
        if ($hours <= 23) {
            $this->load->view('resetpassword', $data);
        } else {
            $this->load->view('link-expired');
        }
    }
    // reset password page process
    public function resetPasswordprocess()
    {
        $userid = $this->input->post('userid');
        $password = $this->input->post('newpassword');
        $confirmpassword = $this->input->post('confirmpassword');
        if (!$this->model->updateData('tbuser', ['password' => base64_encode($password)], ['userid' => $userid])) {
            $this->session->set_flashdata('newpasswordsuccess', 'Password is saved');
            $this->session->keep_flashdata('newpasswordsuccess');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong');
            $this->session->keep_flashdata('error');
        }
        redirect('login', 'refresh');
    }
	public function registrationProcess(){
		$this->load->view('registration');
	}
    // Sign up form data receiving
  public function registerUser(){
  $this->load->library('form_validation');
       $this->form_validation->set_rules("first_name","First Name","required");
      $this->form_validation->set_rules("last_name","Lasr Name","required");
      $this->form_validation->set_rules("password","Password Required","required");
      $this->form_validation->set_rules("password2","Confirm Password Required","required");
      $this->form_validation->set_rules("sitename","Site Name Required","required");
        //   if ($this->form_validation->run()){
        //         // code from this block is after if
        //   }
        //   else{
        //    $this-> registrationProcess();
        //       echo 'error';
        //     //$this->index();
        //   }

      
          //true condition if all validation passed
          $this->load->model('Auth_Model');
          $data = array(
              'fullname' => $this->input->post('first_name'), 
              'username' => $this->input->post('last_name'), 
              'email' => $this->input->post('email'), 
              'password' => base64_encode($this->input->post('password')), 
              'roleid ' => '4', 
           );
           print_r($data);
        
           $this->Auth_Model->registrationModel($data);
           redirect(base_url(). "authentication/inserted");


     // echo"hello";

  }
  public function inserted(){
    $this-> registrationProcess();
  }


	public function allviews(){
		// $this->load->view('admin/monthreport');
		// $this->load->view('admin/yearreport');
		$this->load->view('client/survey');
	//  $this->load->view('admin/inpectiondetail');
		//$this->load->view('admin/inspectionlist');
	//$this->load->view('admin/assignsite');
		 //$this->load->view('admin/user/userlist');
		//  $this->load->view('admin/user/adduser');
		// $this->load->view('admin/dashboard');
	}
}