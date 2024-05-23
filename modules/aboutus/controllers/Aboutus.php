<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mdl_aboutus');
        $this->load->module('user');
    }
	
	// insert about us information. Note: if user_id is made part of the array, it throws a user_id cannot be null error. However, it seems that the user id is still not being passed. 
    public function saveaboutuscontent() {
        $data = array();
        $user_id = $this->session->userdata('user_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['aboutus_content'] = $this->input->post('aboutus_content', true);

        $this->mdl_aboutus->insertaboutuscontent($data, $user_id);

        $sdata = array();
        $sdata['save_message'] = 'About Us content successfully published!';
        $this->session->set_userdata($sdata);
        redirect("user/setting_aboutus");
    }
    
	// update existing information
    public function updateaboutuscontent() {
        $data = array();
        $data['aboutus_id'] = $this->input->post('aboutus_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['aboutus_content'] = $this->input->post('aboutus_content', true);
        $this->mdl_aboutus->updateaboutus($data);
        redirect('user/view_aboutus');
    }
    
    
}
