<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin_login extends MY_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('mdl_super_admin_login');
    }
    
	public function check_super_admin_login() {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $result = $this->mdl_super_admin_login->check_super_admin_login_info($email, $password);

        if ($result) {
            $sdata = array();
            $sdata['user_id'] = $result->user_id;
            $sdata['first_name'] = $result->first_name;
            $sdata['last_name'] = $result->last_name;
            $sdata['user_type'] = $result->user_type;
            $this->session->set_userdata($sdata);

            redirect("super_admin/homesuperadmin", 'refresh');
        } else {
            $sdata['message'] = 'Please enter a valid userID/password';
            $this->session->set_userdata($sdata);
            redirect('home/adminlogin');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect("home/index", 'refresh');
    }

    

}
