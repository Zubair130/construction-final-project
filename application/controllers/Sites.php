<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sites extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //  check for sessions of log-in user
        if (!checkSession()) {
            redirectPreviousurl();
        }
    }
   

   

    public function createsite()
    {
        $this->load->model('Sites_Model');

        $data = array(
            'sitename' => $this->input->post('sitename'),
            'siteaddress' => $this->input->post('siteaddress'),
            'userid' => $_SESSION['userid'],
            
        );
        // print_r($data);
        // exit;
        

        $this->Sites_Model->siteRegistration($data);
        redirect(base_url() . "Sites/inserted");


        // echo"hello";

    }
    public function inserted()
    {
        $this->load->view('admin/sites/addsite');
    }

    // Show all sites 
    public function viewSites()
    {
        $this->load->model('Sites_Model');
       $data['sitedata'] =  $this->Sites_Model->listAllSites();
      // var_dump($data['userdata']);
       //exit;
       $this->load->view('admin/sites/sitelist',$data);

    }
    // Assign sites to inspectors load view

    public function assignSite()
    {
        $this->load->model('Sites_Model');
       $data['sitenames'] =  $this->Sites_Model->fetchallsitesname();

       $data['inspectors'] =  $this->Sites_Model->fetchallinpectors();
      // var_dump($data['userdata']);
       //exit;
       $this->load->view('admin/assignsite',$data);
       
    }

    // inspection and inspector form

    public function inspectorSite()
    {
        $data = array(
            'userid' => $this->input->post('inspector'),
            'siteid' => $this->input->post('site'),                       
        );
        $this->load->model('Sites_Model');
        $this->Sites_Model->siteinspector($data);
        redirect(base_url() . "Sites/created");
    }
    public function created()
    {
        $this->load->view('admin/assignsite');
        $this->output->set_header('refresh:1; url='.base_url() . "Sites/assignSite");
    }

    // Load sites acording to inspector sites and survey page
    public function loadsurvey()
{   
    $this->load->model('Sites_Model');
    $data['sitesdata']  = $this->Sites_Model->loadinspectorsites();
    print_r( $data['sitesdata']);
 
    $this->load->view('client/survey',$data);
}


    // Inspection survey form data
    public function submitsurvey()
    {
        $this->load->model('Sites_Model');
// inspection details 
        $data = array(
            'siteid' => $this->input->post('siteid'),
            'inspectorid' => $_SESSION['userid'],   
            'workarea' => $this->input->post('workarea'),  
            'supervisor' => $this->input->post('supervisor'), 
            'jobdesc' => $this->input->post('jobdesc'),
            'type' => $this->input->post('type'),
        );

        //  insert data to survey deatials table 

       $this->Sites_Model->survdetails($data);
        

         // print_r($data);
        

        // get survey unique id from database
        $survid = $this->Sites_Model->getlastsurveyid();
       
        $survid = $survid[0]->surveyid;
        

     // print_r( $survid);
     // exit;

        //$survid=6;



// inspection data
//for ($i=0; $i < 24; $i++) { 

//   foreaachy starting
$b = 0;
    foreach ($_POST['intervention'] as $key => $i) {
      


$data2 = array(
    'surveryid' => $survid,
    'typeid' => $b,
    'intervention' => $this->input->post('intervention')[$key], 
    'comments' => $this->input->post('comment')[$key], 
    'iscompleted' => $this->input->post('yesno')[$key], 
    'action' => $this->input->post('action')[$key],  
);


$this->Sites_Model->insertsurveydata($data2);
$b++;
}

$this->showsurveydetails($survid);

  }//function bracket

public function fetchsurvey()
{
    $this->load->model('Sites_Model');
    $data['inspections'] =$this->Sites_Model->loadinspectionlist();

   $this->load->view("admin/inspectionlist",$data);

}
    public function showsurveydetails($id)
    {
        $this->load->model('Sites_Model');
        $data['surveydetaisl'] = $this->Sites_Model->loadsingleinspectiont($id);
        $data['singleinspection']=$this->Sites_Model->fetchsurveydetails($id);
        
        // print_r( $data);
        // exit;

        $this->load->view('admin/inpectiondetail',$data);

        
    }


}
