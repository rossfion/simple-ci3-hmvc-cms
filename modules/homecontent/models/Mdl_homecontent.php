<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_homecontent extends CI_Model {

    public function get_table() {
        $table = "tbl_homecontent";
        return $table;
    }

    public function inserthomecontent($data) {
        $this->db->insert('tbl_homecontent', $data);
    }

    public function searchhomeinformation() {
    
        $this->db->select('*');
        $this->db->from('tbl_homecontent');
        $this->db->order_by('homecontent_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function searchhomecontentinfo($homecontent_id) {
        $this->db->select('*');
        $this->db->from('tbl_homecontent');
        $this->db->where('homecontent_id', $homecontent_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function updatehomecontent($data) {
        $this->db->where('homecontent_id', $data['homecontent_id']);
        $this->db->update('tbl_homecontent', $data);
    }

}
