<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Homecontent extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('user');
		$this->load->module('mdl_user');
        $this->load->model('mdl_homecontent');
        
    }

	// insert new content for the home page. Note: if user_id is made part of the array, it throws a user_id cannot be null error. However, it seems that the user id is still not being passed. 
    public function savehomecontent() {
        $data = array();
		$user_id = $this->session->userdata('user_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['home_content'] = $this->input->post('home_content', true);

        $this->mdl_homecontent->inserthomecontent($data, $user_id);

        $sdata = array();
        $sdata['save_message'] = 'Home content successfully published!';
        //$this->session->set_userdata($sdata);
        redirect("user/setting_homecontent");
    }
    
	// update existing content for the home page. 
    public function updatehomecontent() {
        $data = array();
		//$data['user_id'] = $this->session->userdata('user_id', true);
        $data['homecontent_id'] = $this->input->post('homecontent_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['home_content'] = $this->input->post('home_content', true);
        $this->mdl_homecontent->updatehomecontent($data);
        redirect('user/view_homecontent');
    }
    

}
