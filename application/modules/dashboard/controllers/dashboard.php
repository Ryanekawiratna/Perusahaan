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
                     '<link rel="stylesheet"  href=' . base_url() . 'assets/css/argon-dashboard.css?v=2.1.0">',
                     '<script src="' . base_url() . 'assets/js/dashboard/dashboard.js?v=' . assets_version() . '"></script>',
                     '<script src="' . base_url() . 'assets/js/dashboard/argon-dashboard.min.js?v=2.1.0"></script>',
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

              $data['jumlah_barang'] = $this->md->getJumlah()[0];

              echo Modules::run('template', $data);
       }

       public function profile()
       {
              $data['view']           = "v_profile";
              $data['title']             = "Profile";
              // $data['full_width'] = 1;
              // $data['no_border'] = 1;
              $data['module']     = $this->getRootModule();
              $data['header_data']    = $this->getHeaderJSandCSS();

              echo Modules::run('template', $data);
       }

       public function editProfile()
       {
              $this->load->view($this->getRootModule() . '/v_edit_profile');
       }
}
