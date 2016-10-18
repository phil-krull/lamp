<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "Courses";
$route['courses/add'] = 'Courses/new_course';
$route['home'] = 'main';
$route['courses/destroy/(:any)'] = 'Courses/destroy/$1';
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */