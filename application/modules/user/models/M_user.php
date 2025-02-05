<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model
{
    private $web;
    public function __construct()
    {
        parent::__construct();
        $this->web    = $this->load->database('company_prof', true);
        $this->datetime_now = date('Y-m-d H:i:s');
    }

    public function chekAuth($data)
    {

        $result['is_valid'] = false;
        $pass = $data['password'];

        $sql = "select
        u.password
        from `user` u 
        where u.user = '" . $data['user'] . "'";
        $hash = $this->web->query($sql)->result_array()[0];

        // if (count($hash) > 0) {
        if (empty($hash) || count($hash) > 0) {
            if (password_verify($pass, $hash['password'])) {
                $result['is_valid']     = true;
            } else {
                $result['is_valid']     = false;
            }
        }

        return $result;
    }
}
