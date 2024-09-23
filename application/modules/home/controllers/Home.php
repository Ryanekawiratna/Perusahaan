<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_login', 'md');
    }
    public function getRootModule()
    {
        return 'home/home';
    }

    public function index()
    {
        $data['view'] = 'body';
        $data['title'] = 'Home';
        // echo Modules::run($data);
        echo Modules::run($this->getRootModule() . '/view', $data);
    }

    public function view($data)
    {
        $this->load->view($data['view'], $data);
    }
}
