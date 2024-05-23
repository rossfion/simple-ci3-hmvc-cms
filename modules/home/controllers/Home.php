<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
		$this->load->module('aboutus');
        $this->load->model('mdl_aboutus');
        $this->load->module('homecontent');
        $this->load->model('mdl_homecontent');
        $this->load->module('profile');
        $this->load->model('mdl_profile');
    }

    function index(){
		$data = array();
        $data['view_homecontent'] = $this->mdl_homecontent->searchhomeinformation();
        $data['profiles'] = $this->mdl_profile->getallprofiles();
		$data['view_module'] = 'home';
		$data['view_file'] = 'index';
		$this->load->module('templates');
		$this->templates->public_template($data);
	}
	
	function aboutus() {
		$data['view_aboutus'] = $this->mdl_aboutus->searchaboutusinformation();
        $data['view_module'] = 'aboutus';
		$data['view_file'] = 'index';
		$this->load->module('templates');
		$this->templates->public_template($data);
    }
	
	function userregistration() {
        $this->load->view('registration/user_registration');
    }
    
    function userlogin() {
        $this->load->view('login/user_login');
    }
	
	function adminlogin() {
        $this->load->view('super_admin/super_admin_login');
    }

}
