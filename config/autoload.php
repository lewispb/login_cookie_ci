<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

# Load the library when the spark is loaded
$autoload['libraries'] = array('database','login_cookie');

$autoload['helper'] = array('login_cookie');
