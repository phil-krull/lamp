<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class surveys extends CI_Controller {

	// 		public function __construct()
	// {
	// 		parent:: __construct();
	// 		$this->output->enable_profiler();
	// }

	public function index()
	{
		$this->load->view('index');
		// if($this->session->userdata('counter'))
		// {
		// 	$counter = $this->session->userdata['counter'];
		// 	$this->session->set_userdata('counter', $counter+1);
		// }
		// else
		// {
		// 	$this->session->set_userdata('counter', 1);
		// }
		// $this->load->view('process_form', array('counter' => $this->session->userdata('counter')));
	}
	public function process()
	{
		if($this->input->post())
		{
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);

			$userdata = $this->input->post();
			$this->session->set_userdata($userdata);
			redirect('/process_form');
		}
		else
			redirect('survey/index');
	}

	public function process_form()
	{
		$this->load->view('process_form');
	}
	// public function reset()
	// {
	// 	redirect('/index');
	// }

	//this function does the same as above, using the keys on the process_form page to echo the data.  $name, $location, $language
	// public function process_form()
	// {
	// 	$This->load->view('result', '$this->session->userdata');
	// }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */