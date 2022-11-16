<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Razorpay_Api
{
    public function __construct()
    {		require_once APPPATH.'third_party/razorpay/razorpay-php/Razorpay.php';
    }
}