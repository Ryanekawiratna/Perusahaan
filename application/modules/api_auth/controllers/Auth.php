<?php
defined('BASEPATH') or exit('No direct script access allowed');

require(APPPATH . '/libraries/REST_Controller.php');

use Restserver\Libraries\REST_Controller;


class Auth extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_auth', 'ma');
	}

	public function test_get()
	{
		echo '<pre>';
		print_r('function get');
		die;
		$field 		= ['no_rekeing', '123', '123'];
		$field_name = ['Nomor Rekening', '123', '123'];

		foreach ($field as $kf => $vf) {
			$is_valid = true;
			if (!isset($_GET[$vf]) || trim($_GET[$vf]) == '') {
				$is_valid = false;
				$message = $field_name[$kf] . " kosong";
			}

			if (!$is_valid) {
				$result = [
					'status'	=> false,
					'field'		=> $field_name[$kf],
					'message'	=> $message,
				];

				$this->response($result, REST_Controller::HTTP_BAD_REQUEST);
			}
		}


		if ($is_valid) {
			$result	= $this->mpc->getDistricts($_GET['id_regencies'], $_GET['id_user']);

			if ($result['is_valid']) {
				$result = [
					'status'	=> true,
					'data'		=> $result['data'],
				];
			} else {
				$result = [
					'status'	=> true,
					'data'		=> [],
				];
			}

			$this->response($result, REST_Controller::HTTP_OK);
		}
	}

	public function test_post()
	{
		echo '<pre>';
		print_r('function post');
		die;
		$field 		= ['123', '123', '123'];
		$field_name = ['123', '123', '123'];

		foreach ($field as $kf => $vf) {
			$is_valid = true;
			if (!isset($_POST[$vf]) || trim($_POST[$vf]) == '') {
				$is_valid = false;
				$message = $field_name[$kf] . " kosong";
			}

			if (!$is_valid) {
				$result = [
					'status'	=> false,
					'field'		=> $field_name[$kf],
					'message'	=> $message,
				];

				$this->response($result, REST_Controller::HTTP_BAD_REQUEST);
			}
		}


		if ($is_valid) {
			$result['is_valid'] = true;

			if ($result['is_valid']) {
				$result = [
					'status'	=> true,
					'data'		=> 'Berhasil',
				];

				$this->response($result, REST_Controller::HTTP_OK);
			} else {
				$result = [
					'status'	=> false,
					'data'		=> 'Gagal',
				];

				$this->response($result, REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
			}
		}
	}
}
