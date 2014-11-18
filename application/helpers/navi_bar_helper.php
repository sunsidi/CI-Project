<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_navi_data'))
{
    function get_navi_data()
    {
        $ci = get_instance();
        $ci->load->library('session');
        $ci->load->model('model_users');
        $ci->load->model('model_friend_request');
        $email = $ci->session->userdata('email');
        $temp_user_id = $ci->model_users->get_userID($email);
        $temp_data = $ci->model_friend_request->get_notifications($temp_user_id);
        if($temp_data['number_of_notes'] >= 5)
            $temp_data['counter'] = 5;
        else
            $temp_data['counter'] = $temp_data['number_of_notes'];
        $user_data = $ci->model_users->get_info($email);
        $nav_data = array_merge($temp_data, $user_data);
        return $nav_data;
    }   
}