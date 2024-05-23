<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mdl_profile');
    }

// insert new profile information
    public function save_profileinformation() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id', true);
        $data['name'] = $this->input->post('name', true);
        $data['description'] = $this->input->post('description', true);
        $data['email'] = $this->input->post('email', true);
        $data['phoneNumber'] = $this->input->post('phoneNumber', true);

        if ($_FILES['image_path']['size'] <= 10000000) {
            $result = $this->do_upload('image_path');
            if ($result['upload_data']) {
                $data['image_path'] = 'resource/image_path/' . $result['upload_data']['file_name'];
            }
        } else {
// not working
        }
        $this->mdl_profile->insertprofileinformation($data);

        $sdata = array();
        $sdata['save_profile'] = 'Your profile has been updated!';
        $this->session->set_userdata($sdata);
        redirect("user/user_admin/index");
    }

    public function do_upload($image_file) {
        $config['upload_path'] = './resource/image_path/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000000;
        $config['max_width'] = 10000000;
        $config['max_height'] = 768000;
        $config['file_name'] = date('dmYHis');

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($image_file)) {
            $error = array('error' => $this->upload->display_errors());
            return error;

            //$this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
            return $data;

            //$this->load->view('upload_success', $data);
        }
    }

    public function resize($path, $image_file) {

        $config['image_library'] = 'gd2';
        $config['source_image'] = $path;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 150;
        $config['height'] = 75;
        $config['new_image'] = './resource/thumbnails/'.$image_file;
        
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

}
