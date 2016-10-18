<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "Users";

$route['users/create'] = "Users/create";

$route['sessions/create'] = "Sessions/create";

$route['success'] = "Sessions/success";

$route['friends'] = "Friends/show";

$route['friends/create'] = "Friends/create";

$route['sessions/destroy'] = "Sessions/destroy";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */