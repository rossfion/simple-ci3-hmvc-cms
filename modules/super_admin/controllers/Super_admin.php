<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mdl_super_admin');
        //Modules::run('user');
        //$this->load->model('mdl_user_admin');
    }
    
    public function index(){
        $this->load->view('super_admin/super_admin_login');
    }
    
    public function homesuperadmin(){
        $data = array();
        $data['alluserinfo']=$this->mdl_super_admin->searchuserinfo();
        $data['deleteuserinfo']=$this->mdl_super_admin->superadmindeleteuserprofile();
        $data['deleteuser']=$this->mdl_super_admin->superadmindeleteuser();
        

        $this->load->view('super_admin/super_admin_home', $data);
    }
    
    public function editpostinformation($user_id) {
        $data = array();
        $data['editpostinformation']=$this->mdl_super_admin->editpost($user_id);

        $this->load->view('super_admin/edit_user_post', $data);
    }
    
    public function updateuserinformation(){
        $data = array();
        $data['user_id'] = $this->input->post('user_id', true);
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email'] = $this->input->post('email', true);
        $data['password'] = md5($this->input->post('password', true));
        $data['status'] = $this->input->post('status', true);
        $this->mdl_super_admin->updateuserinfobysuperadmin($data);
//        $sdata = array();
//        $sdata['save_message'] = 'Registration completed successfully';
//        $this->session->set_userdata($sdata);
        redirect('super_admin/homesuperadmin');
    }
    
    public function deleteuserpostinfo($user_id){
        $this->mdl_super_admin->deleteuserpostbysupadmin($user_id);
        redirect('super_admin/homesuperadmin');
    }
    
    public function deleteuser($user_id){
        $this->mdl_super_admin->deleteuserbysupadmin($user_id);
        redirect('super_admin/homesuperadmin');
    }

    

}
