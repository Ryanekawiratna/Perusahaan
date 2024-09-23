<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Debug extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_debug', 'md');
	}

	public function index()
	{
		echo '<pre>';
		print_r(123);
		die;
	}
}
