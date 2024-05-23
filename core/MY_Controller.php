<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {
/*
* some material originally taken from Joost van Veen Build a CMS with Codeigniter 2012
*/
  public $data = array();
  function __construct()
  {
    parent::__construct();
	/*Additional code which you want to run automatically in every function call */
    /*$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
    $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
    $this->output->set_header('Pragma: no-cache');*/
	
	//$this->data['errors'] = array();
	$this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->helper('language');

        
	
	$this->load->module('home');
	$this->load->module('aboutus');
	$this->load->module('homecontent');
	$this->load->module('profile');
	$this->load->module('registration');
	$this->load->module('login');
	$this->load->module('super_admin');
	$this->load->module('super_admin_login');
	$this->load->module('user');	
	$this->load->module('templates');
	
  }

}