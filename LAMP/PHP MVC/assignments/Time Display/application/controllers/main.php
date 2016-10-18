<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	protected $view_data = array();

	public function index()
	{
		$this->view_data['date'] = date('M d, Y');
		$this->view_data['time'] = date('h:i A');

		$this->load->view('index', $this->view_data);
	
		// $this->load->view('index');
	}
	// public function time_display()
	// {
	// 	$this->session->set_flashdata
	// }
}



// $date = date_default_timezone_set("America/Los_Angeles");
// 				date("D M j h:i:sa");