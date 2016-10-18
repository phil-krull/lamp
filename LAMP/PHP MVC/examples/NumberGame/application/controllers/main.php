<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		if(!isset($this->session->userdata['number']))
		{
			$this->session->set_userdata('number', rand(1,100));
		}
		$this->load->view('index.php');
	}
	public function checkSession()
	{
		if($this->input->post('guess') < $this->session->userdata['number'])
		{
			$this->session->set_flashdata('result', 'Too Low!');
		}
		if($this->input->post('guess') > $this->session->userdata['number'])
		{
			$this->session->set_flashdata('result', 'Too high!');
		}
		if($this->input->post('guess') == $this->session->userdata['number'])
		{
			$this->session->set_flashdata('correct', 'You Got it!');
		}
		redirect('/');
	}
	public function destroy()
	{
		$this->session->unset_userdata('number');
		redirect('/');
	}
}










