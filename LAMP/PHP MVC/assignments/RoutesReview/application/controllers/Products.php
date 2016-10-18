<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {


	public function index()
	{
		echo "Welome to routes review";
	}
	public function hello($id, $id2)
	{
		echo $id, $id2;
	}
}