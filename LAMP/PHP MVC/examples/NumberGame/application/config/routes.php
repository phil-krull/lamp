<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['check'] = 'main/checkSession';
$route['reset'] = 'main/destroy';

