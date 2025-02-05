<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends MX_Controller
{
    /* 
    ===============
    CONTRACT $data
    ===============
    'view'          => REQUIRED
    'module'        => REQUIRED
    'header_data    => ADD ON   (CSS and JS)
    'title'         => ADD ON   (tab title)
    'title_content' => ADD ON   (page title)
    */

    public function index($data)
    {
        // echo "<pre>";
        // print_r($data);
        // die;
        return $this->load->view('template_view', $data);
    }
}
