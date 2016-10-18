<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "Products";
$route['products'] = "Products/index";
$route['products/create'] = "Products/create";
$route['products/newpro'] = "Products/newpro";
$route['products/show/(:any)'] = "Products/show/$1";
$route['products/edit/(:any)'] = "Products/edit/$1";
$route['products/destroy/(:any)'] = "Products/destroy/$1";
$route['products/update/(:any)'] = "Products/update/$1";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */