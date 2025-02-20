<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MX_Controller
{
       public function __construct()
       {
              parent::__construct();
              $this->load->model("M_dashboard", "md");
       }

       public function getRootModule()
       {
              return "dashboard";
       }

       public function getHeaderJSandCSS()
       {

              $data = array(
                     '<script src="' . base_url() . 'assets/js/dashboard/dashboard.js?v=' . assets_version() . '"></script>',
              );
              return $data;
       }

       public function index()
       {
              $data['view']           = "v_dashboard";
              $data['title']             = "Dashboard";
              $data['full_width'] = 1;
              $data['no_border'] = 1;
              $data['module']     = $this->getRootModule();
              $data['header_data']    = $this->getHeaderJSandCSS();

              echo Modules::run('template', $data);
       }
}
