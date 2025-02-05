<?php
defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'company_prof';
$active_record = TRUE;

$db['company_prof'] = array(
    'dsn'    => '',
    'hostname' => 'localhost',
    'username' => 'root', // DEV
    'password' => '', // DEV
    'database' => 'company_prof', // DEV
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

// $db['company_prof']['hostname'] = 'localhost';
// $db['company_prof']['username'] = 'root';
// $db['company_prof']['password'] = '';
// /* END SIMULASI */

// $db['company_prof']['dbdriver'] = 'pdo';
// $db['company_prof']['dbprefix'] = '';
// $db['company_prof']['pconnect'] = FALSE;
// $db['company_prof']['db_debug'] = TRUE;
// $db['company_prof']['cache_on'] = FALSE;
// $db['company_prof']['cachedir'] = '';
// $db['company_prof']['char_set'] = 'utf8';
// $db['company_prof']['dbcollat'] = 'utf8_general_ci';
// $db['company_prof']['swap_pre'] = '';
// $db['company_prof']['autoinit'] = TRUE;
// $db['company_prof']['stricton'] = FALSE;
