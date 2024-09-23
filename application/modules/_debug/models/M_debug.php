<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_debug extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function exec_function($data)
	{
		/* 
		INSERT
		 - table 1
		*/
		$result['is_valid'] = false;

		$this->db->trans_begin();

		$mao = [
			'id_user'			=> $data['id_user'],
		];

		$this->db->insert('mitra_admission_order', $mao);

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
		} else {
			$this->db->trans_commit();
			$result['is_valid'] = true;
		}

		return $result;
	}
}
