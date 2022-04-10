<?php
// sessions
if (!function_exists('checkSession')) {
    function checkSession()
    {
        $ci = &get_instance();
        if ($ci->session->userdata('userid') && $ci->session->userdata('useremail')) {
            return true;
        } else {
            return false;
        }
    }
}

//redirect to RAC and AA signup
if (!function_exists('redirectPreviousurl')) {
    function redirectPreviousurl()
    {
        $ci = &get_instance();
        if (!$ci->session->userdata('userid')) {
            redirect('login?redirect=' . current_url());
        }
    }
}

if (!function_exists('userLog')) {
    function userLog($userid = null, $username, $businessid = null, $ipaddress, $issuccess)
    {
        $ci = &get_instance();
        if ($userid) {
            $data['userid'] = $userid;
        }
        if ($username) {
            $data['username'] = $username;
        }
        if ($businessid) {
            $data['busid'] = $businessid;
        }
        if ($ipaddress) {
            $data['ipaddress'] = $ipaddress;
        }
        $data['issuccess'] = $issuccess;
        $data['createdat'] = date("Y-m-d");
        $ci->db->insert("tbuserlog", $data);
        return true;
    }
}