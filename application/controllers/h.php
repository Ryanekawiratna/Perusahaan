<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_login', 'md');
    }
    public function getRootModule()
    {
        return 'home';
    }

    public function index()
    {
        $data['view'] = 'v_home';

        Modules::run($data);
    }
}
