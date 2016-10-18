<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "Products";
$route['hello'] = "Products/hello";
$route['hello/(:any)/(:any)'] = "Products/hello/$1/$2";
$route['404_override'] = '';
$route['Users'] = "Users/new_user";
$route['register'] = 'Users/new_user';
$route['login'] = "Sessions/new_session";
$route['logoff'] = "Sessions/destroy";


/* End of file routes.php */
/* Location: ./application/config/routes.php */