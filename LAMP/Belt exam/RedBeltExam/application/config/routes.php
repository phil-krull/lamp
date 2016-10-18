<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "Users";
$route['user/create'] = "Users/create";
$route['sessions/destroy'] = "Sessions/destroy";
$route['sessions'] = "Sessions";
$route['session/new'] = "Sessions/new_session";
$route['trip/new'] = "Trips/index";
$route['trip/create'] = "Trips/create";
$route['trip/trips'] = "Trips/get_trips";
$route['trip/destination/(:any)'] = "Destinations/get_trip/$1";
$route['join/trip/(:any)/(:any)'] = "Destinations/add_post_trip/$1/$2"; 
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */