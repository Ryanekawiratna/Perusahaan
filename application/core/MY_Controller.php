<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
    public function view($view, $data = [])
    {
        $data['content'] = $this->load->view($view, null, true); // Memuat view tanpa langsung menampilkannya
        $this->load->view('template/template', $data); // Memuat template
    }
}
