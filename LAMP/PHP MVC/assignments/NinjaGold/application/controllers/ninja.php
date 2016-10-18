<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ninja extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->gold_pieces = $this->session->userdata('gold_pieces');
    $this->total_gold = $this->session->userdata('total_gold');
  }

  public function index()
  {
    $this->load->view('yourgold');
  }
  public function reset()
  {
    if($this->input->post('reset'))
    {
      $gold_pieces = 0;
      $total_gold = array();
      $this->session->sess_destroy();
      redirect('/');
    }
  }
  public function process_money()
  {
    $your_gold = $this->input->post();

    if(!$this->gold_pieces)
    {
      $this->session->set_userdata('gold_pieces', 0);
    }

    if(isset($your_gold['building']))
    {
      $building = $your_gold['building'];
      $gold_pieces = 0;

      if($building == 'farm')
        $gold_pieces = rand(10,20);

      elseif($building == 'cave')
        $gold_pieces = rand(5,10);

      elseif($building == 'house')
        $gold_pieces = rand(2,5);

      else
      {
        $percent = rand(0,100);

        if ($percent <=70)
        {
          $gold_pieces = rand(-50,-1);
          $message = 'Ouch';
        }
        else
        {
          $gold_pieces = rand(1,50);
          $message = 'Nice';
        }
      }

      // if($this->session->userdata('total_gold'))
      // {
      //   $this->total_gold = [];
      // }

      // else($this->session->userdata('total_gold'))
      
      // else
      // {
        $this->total_gold[] =  'You entered a ' . $building . ' and earned ' . $gold_pieces . ' gold pieces.' . (($building == 'casino') ? '... '. $message .'.. ': '') . '   (' . date('M d, Y h:ia') . ')';
        // array_push($total_gold, 'this->total_gold');
      // }


    $gold_pieces += $this->session->userdata('gold_pieces');
    $this->session->set_userdata('gold_pieces', $gold_pieces);
    $this->session->set_userdata('total_gold', $this->total_gold);
    redirect('/');
    }
  }
}