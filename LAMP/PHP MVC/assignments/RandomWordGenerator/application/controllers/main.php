<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

	public function index()
	{
		$this->load->view('index');	
		// $this->load->helper('_random_string');
	}

	public function random()
	{	
		// if($this->input->post())
		// {
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
	// 		$userdata = $this->input->post();
			$help_file = random_string('alnum', 14);
			$this->session->set_userdata('help_file',$help_file);
			redirect(base_url());
		// }
		// else
		// {
		// 	$this->session->set_userdata('counter', 1);
		// }

		// $this->load->view('index', array('counter'=> $this->session->userdata('counter')));
	}
}
// $type = 
// $len =