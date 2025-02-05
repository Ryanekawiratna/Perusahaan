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
        return 'home';
    }

    public function index()
    {
        $data['view']           = 'body';
        $data['title']          = 'Home';
        $data['full_width']     = 1;
        $data['module']         = $this->getRootModule();

        echo Modules::run("template", $data);
    }
}
