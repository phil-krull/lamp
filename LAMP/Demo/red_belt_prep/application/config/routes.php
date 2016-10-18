<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "Users";

//1. Route to render the register form
$route['users/new'] = "Users/new_user";

//2. Route to render the log in form
$route['sessions/new'] = "Sessions/new_session";

//3. Route to do the actual registration
$route['users/create'] = "Users/create";

//4. Route to do the actual log in
$route['sessions/create'] = "Sessions/create";

$route['books'] = "Books/index";

//Show the add review page
$route['reviews/new'] = "Reviews/new_review";

//Actually add the review to the database
$route['reviews/create'] = "Reviews/create";

//Route to log out
$route['sessions/destroy'] = "Sessions/destroy";

//show one particular book
$route['books/(:any)'] = "Books/show/$1";

$route['reviews/destroy/(:any)'] = "Reviews/destroy/$1";

$route['users/(:any)'] = "Users/show/$1";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */