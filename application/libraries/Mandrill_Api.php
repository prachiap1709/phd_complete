<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mandrill_Api
{
    public function __construct()
    {
        require_once APPPATH.'third_party/Mandrill_Api/src/Mandrill.php';
    }
}