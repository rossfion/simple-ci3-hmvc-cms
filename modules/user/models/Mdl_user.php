<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_user_admin extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_table() {
        $table = "tbl_user";
        return $table;
    }
    
    public function searchuserinfo() {
        $this->db->select('*');
        $this->db->from('tbl_user');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function editpost($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}
