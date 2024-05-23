<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('mdl_user_login');
    }
	// This controller handles the information sent via the user login model using the login form
    public function check_user_login() {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $result = $this->mdl_user_login->check_user_login_info($email, $password);

        if ($result) {
            $sdata = array();
            $sdata['user_id'] = $result->user_id;
            $sdata['first_name'] = $result->first_name;
            $sdata['last_name'] = $result->last_name;
            $sdata['user_type'] = $result->user_type;
            //$sdata['status'] = $result->status;
            $this->session->set_userdata($sdata);

            redirect("user", 'refresh');
        } else {
            $sdata['message'] = 'Please enter a valid userID/password';
            $this->session->set_userdata($sdata);
            redirect('home/userlogin');
        }
    }
	

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect("home/index", 'refresh');
    }

    

}
