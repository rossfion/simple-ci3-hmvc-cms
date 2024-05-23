<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_aboutus extends CI_Model {

    public function get_table() {
        $table = "tbl_aboutus";
        return $table;
    }

    public function insertaboutuscontent($data) {
        $this->db->insert('tbl_aboutus', $data);
    }

    public function searchaboutusinformation() {
        $this->db->select('*');
        $this->db->from('tbl_aboutus');

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function searchaboutusinfo($aboutus_id) {
        $this->db->select('*');
        $this->db->from('tbl_aboutus');
        $this->db->where('aboutus_id', $aboutus_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function updateaboutus($data) {
        $this->db->where('aboutus_id', $data['aboutus_id']);
        $this->db->update('tbl_aboutus', $data);
    }
    
    

}
