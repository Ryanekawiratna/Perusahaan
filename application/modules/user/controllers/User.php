<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user', 'mu');
    }

    public function getRootModule()
    {
        return 'user';
    }

    private function getHeaderJSandCSS()
    {
        $data = array(
            '<script src="' . base_url() . 'assets/js/user/login.js?v=' . assets_version() . '"></script>',
        );
        return $data;
    }

    public function index()
    {
        $data['view'] = 'v_login';
        $data['title'] = 'Login';
        $data['module'] = $this->getRootModule();
        $data['header_data'] = $this->getHeaderJSandCSS();

        echo Modules::run('template', $data);
    }

    public function auth()
    {
        $data = $_POST['params'];

        $auth = $this->mu->chekAuth($data);
        echo json_encode($auth);
    }
}
