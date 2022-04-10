<?php
//custom function
if (!function_exists('responseGenerate')) {
    function responseGenerate($type, $msg = '')
    {
        $result = ['type' => $type, 'msg' => $msg];
        echo json_encode($result);
        exit();
    }
}

if (!function_exists('userRole')) {
    function userRole($data)
    {
        $ci = &get_instance();
        $role = $ci->session->userdata('roleid');
        $key = in_array($role, $data);
        if ($key) {
            return true;
        } else {
            return false;
        }
    }
}