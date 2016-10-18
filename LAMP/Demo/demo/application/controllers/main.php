<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

		public function __construct()
	{
			parent:: __construct();
			$this->output->enable_profiler();
	}

	public function index()
	{
		// $this->session->set_userdate('Hello');
		$this->load->view('index');
	}
	public function checkSession()
	{
		var_dump($this->input->post());
		die();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */