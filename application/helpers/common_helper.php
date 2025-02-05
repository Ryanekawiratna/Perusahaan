<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/*===== Assets Versioning =====*/
if (!function_exists('assets_version')) {
    function assets_version()
    {
        $version = str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz");
        return substr($version, 0, 11);
    }
}
/*===== END Assets Versioning =====*/
