<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listUser()
    {
        /* 
		INSERT
		 - table 1
		*/
        $sql = "select * from user";
        return $this->db->query($sql)->result_array();
    }
}
