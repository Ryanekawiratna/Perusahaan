<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    private $web;
    private $datetime_now;
    public function __construct()
    {
        parent::__construct();
        $this->web    = $this->load->database('company_prof', true);
        $this->datetime_now = date('Y-m-d H:i:s');
    }
}
