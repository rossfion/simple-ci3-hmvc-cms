<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_registration extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function insert($data){
        $this->db->insert('tbl_user',$data);
    }

    

}
