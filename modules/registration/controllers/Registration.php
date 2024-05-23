<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mdl_registration');
    }
    
	// Note: the registration works. Feel free to fix the feedback message as it does not show.
    public function user_registration_information() {
        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email'] = $this->input->post('email', true);
        $data['password'] = md5($this->input->post('password', true));
		$data['user_type'] = $this->input->post('user_type', true);
        $data['status'] = $this->input->post('status', true);
        $this->mdl_registration->insert($data);
        $sdata = array();
        $sdata['save_message'] = 'Registration completed successfully! Login into your account to update your profile.';
        $this->session->set_userdata($sdata);
        redirect('home/userlogin');
    }

    

}
