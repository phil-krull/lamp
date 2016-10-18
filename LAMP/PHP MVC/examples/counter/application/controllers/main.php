<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

	// public function __construct()
	// {
	// 	parent:: __construct();
	// 	$this->output->enable_profiler();
	// }

	public function index()
	{
		//see if the 'counter' exist in the session
		if($this->session->userdata('counter'))
		{
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		}
		else
		{
			$this->session->set_userdata('counter', 1);
		}

		$this->load->view('index', array('counter'=> $this->session->userdata('counter')));
	}

	public function hello()
	{
		echo "Hello World";
	}

	public function reset()
	{
		$this->session->set_userdata('counter', 0);
		redirect('/');

	}
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */