<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_profile extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_table() {
        $table = "tbl_profile";
        return $table;
    }

    public function insertprofileinformation($data) {
        $this->db->insert('tbl_profile', $data);
    }

    public function searchprofileinformation($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_profile');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function getallprofiles() {
        $this->db->select('*');
        $this->db->from('tbl_profile');
        $this->db->order_by('profile_id', 'desc');
        $this->db->limit(8);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

}
