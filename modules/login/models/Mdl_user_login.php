<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_user_login extends CI_Model {
    

    public function check_user_login_info($email, $password) {
        $email = $this->input->post('email', true);
        $password = md5($this->input->post('password', true));
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('status', 1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}
