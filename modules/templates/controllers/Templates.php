<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Templates extends MY_Controller {

    function __construct() {
        parent::__construct();
    }
	
	function public_template($data) {
        if (!isset($data['view_module'])) {
            $data['view_module'] = $this->uri->segment(1);
        }
        
        $this->load->view('public_template', $data);
    }
	
	/* function test_template(){
		if (!isset($data['view_module'])) {
            $data['view_module'] = $this->uri->segment(1);
        }
        
        $this->load->view('test_template', $data);
	} */
	
   
    /* function admin_template($data) {
        if (!isset($data['view_module'])) {
            $data['view_module'] = $this->uri->segment(1);
        }
        $this->load->view('admin_template', $data);
    } */

}
