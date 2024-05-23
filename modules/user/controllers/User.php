<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->module('aboutus');
        $this->load->model('mdl_aboutus');
        $this->load->module('homecontent');
        $this->load->model('mdl_homecontent');
        $this->load->module('profile');
        $this->load->model('mdl_profile');
        
    }
    
	// load the index page 
    public function index(){
        $this->load->view('admin_panel/admin_home');
    }
    
	// load the set_aboutus page 
    public function setting_aboutus() {
        $this->load->view('admin_panel/set_aboutus');
    }
    
	// load the view_aboutus page
    public function view_aboutus() {
        $data = array();
        $data['view_aboutus'] = $this->mdl_aboutus->searchaboutusinformation();
        $this->load->view('admin_panel/view_aboutus', $data);
    }
    
	// load the edit_aboutus page with its respective id
    public function editaboutus($aboutus_id) {
        $data = array();
        $data['editaboutus'] = $this->mdl_aboutus->searchaboutusinfo($aboutus_id);
  
        $this->load->view('admin_panel/updateaboutus', $data);
    }
    
	// load the set_homecontent page
    public function setting_homecontent() {
        $this->load->view('admin_panel/set_homecontent');
    }
    
	// load the view_homecontent page
    public function view_homecontent() {
        $data = array();
        $data['view_homecontent'] = $this->mdl_homecontent->searchhomeinformation();
        $this->load->view('admin_panel/view_homecontent', $data);
    }
    
	// load the edit_homecontent page ith its respective id
    public function edithomecontent($homecontent_id) {
        $data = array();
        $data['edithomecontent'] = $this->mdl_homecontent->searchhomecontentinfo($homecontent_id);
  
        $this->load->view('admin_panel/updatehomecontent', $data);
    }
    
	// load the profile information page
    public function viewprofileinformation() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['viewprofileinfo'] = $this->mdl_profile->searchprofileinformation($user_id);

        $this->load->view('admin_panel/viewprofileinfo', $data);
    }


}
