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

       private function getHeaderJSandCSS()
       {
              $data = array(
                     '<script src="' . base_url() . 'assets/js/home/home.js?v=' . assets_version() . '"></script>',
              );
              return $data;
       }


       public function index()
       {
              $data['view']           = 'body';
              $data['title']          = 'Home';
              $data['full_width']         = 1;
              $data['no_border']     = 1;
              $data['module']         = $this->getRootModule();
              $data['header_data'] = $this->getHeaderJSandCSS();


              echo Modules::run("template", $data);
       }
}
