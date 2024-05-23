<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_super_admin extends CI_Model {

    public function __construct() {
        parent::__construct();
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

    public function updateuserinfobysuperadmin($data){
        $this->db->where('user_id', $data['user_id']);
        $this->db->update('tbl_user',$data);
    }
    
    public function deleteuserpostbysupadmin($user_id){
        $this->db->where('user_id', $user_id);
        $this->db->delete('tbl_profile');
    }
    
    public function superadmindeleteuserprofile(){
        $this->db->select('*');
        $this->db->from('tbl_profile');
        $this->db->order_by('profile_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function deleteuserbysupadmin($user_id){
        $this->db->where('user_id', $user_id);
        $this->db->delete('tbl_user');
    }
    
    public function superadmindeleteuser(){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->order_by('user_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

}
