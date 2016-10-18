<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class quest extends CI_Controller {

	// protected $your_quest = array();

	public function index()
	{
		// $this->session->set_userdata('quest_info', array());
		$your_quests = $this->session->userdata('quest_info');
			// var_dump($your_quest);
			// die();
		if(isset($your_quests))
		//	retrieve info from session, into $your_quest
		{
			$quests_array = array('quests' => $your_quests);
			$this->load->view('index', $quests_array);
		}
		else
		{
			$this->new_quest();
		}
	}

	public function create()
	{
		if($this->input->post())
		{	
			$your_quest = $this->input->post();
			$quest_history = $this->session->userdata('quest_info');
			if(!isset($quest_history))
			{
				$quest_history = [];
			}
			array_push($quest_history, $your_quest);
			$this->session->set_userdata('quest_info', $quest_history);
			redirect(base_url(''));

			// $this->session->userdata('your_quest');
			// var_dump($your_quest);
			// die();
		}
	}
	public function new_quest()
	{
		$this->load->view('new');
	}
}