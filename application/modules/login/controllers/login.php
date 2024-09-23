<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login', 'md');
    }

    public function index()
    {
        // echo '<pre>';
        // print_r(123);
        // die;
        $a = $this->md->listUser();
        echo "<pre>";
        print_r(base_url());
        die;
    }
}
