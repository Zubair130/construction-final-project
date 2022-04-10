<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sites_Model extends CI_Model
{
    public function siteRegistration($data){
        $this->db->insert('tbsite',$data);
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
    public function listAllSites()
    {
       $query =  $this->db->get('tbsite'); 
       return $query->result();

    //    $row = $query->result();
    //    if($row){
    //     return $row ;
    //     //return true;
    //    }
    }

    public function fetchallsitesname()
    {
       $this->db->select('siteid, sitename');
       $this->db->from('tbsite');
       $query = $this->db->get(); 
       return $query->result();
       //$this->raw_qeu
   
    }

    public function fetchallinpectors()
    {
       $this->db->select('userid, fullname', 'roleid');
       $this->db->from('tbuser');
       $this->db->where('roleid = 3');
       $query = $this->db->get(); 
       return $query->result();
   
    }
    public function siteinspector($data)
    {
        $this->db->insert('tbsiteinspector',$data);
    }
    // loading inspectors 
    public function loadinspectorsites()
    {
        $query = $this->db->query('(SELECT DISTINCT tbsite.sitename, tbsite.siteid from tbsite INNER JOIN tbsiteinspector ON tbsite.siteid = tbsiteinspector.siteid);');
        // $this->db->select('siteid');
        // $this->db->from('tbsiteinspector');
        // $this->db->where('userid = '. $data);
        // $query = $this->db->get(); 
        return $query->result();
    }


    //  get last user id

    public function getlastsurveyid()
    {
        $query = $this->db->query('SELECT surveyid FROM tbsurvey ORDER BY surveyid DESC LIMIT 1;');
        return $query->result();
    }

    // insert survey data to main table
    public function survdetails($data)
    {
        $this->db->insert('tbsurvey',$data);
    }

    //insert intercentaion data
    public function insertsurveydata($data)
    {
        $this->db->insert('tbsurveyscore',$data);
    }

    // load inspections list
    public function loadinspectionlist()
    {
        $query = $this->db->query('SELECT tbuser.fullname,(SELECT tbsite.sitename from tbsite WHERE tbsite.siteid = tbsurvey.siteid) as sitename, tbsurvey.surveyid,tbsurvey.workarea, tbsurvey.supervisor,tbsurvey.jobdesc, tbsurvey.createdat FROM tbuser INNER JOIN tbsurvey on tbuser.userid = tbsurvey.inspectorid;');
        return $query->result();
    }

    
    // load inspections list
    public function loadsingleinspectiont($id)
    {
        $query = $this->db->query('SELECT tbuser.fullname,(SELECT tbsite.sitename from tbsite WHERE tbsite.siteid = tbsurvey.siteid) as sitename, tbsurvey.surveyid,tbsurvey.workarea,tbsurvey.type, tbsurvey.supervisor,tbsurvey.jobdesc, tbsurvey.createdat FROM tbuser INNER JOIN tbsurvey on tbuser.userid = tbsurvey.inspectorid WHERE tbsurvey.surveyid =  "'.$id.'";');
        return $query->result();
    }

    // fetch inspection intervention details
    public function fetchsurveydetails($id)
    {
       $query = $this->db->query('SELECT tbsurveyscore.surveryid, (SELECT tbtype.typename from tbtype WHERE tbtype.typeid = tbsurveyscore.typeid) AS interventiontype, (SELECT DISTINCT SUM(tbsurveyscore.intervention) FROM tbsurveyscore WHERE surveryid =  "'.$id.'") AS  intersum,tbsurveyscore.intervention,tbsurveyscore.comments,tbsurveyscore.iscompleted,tbsurveyscore.action from tbsurveyscore WHERE surveryid =  "'.$id.'";');
        return $query->result();
    }

    
    

}