<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friends extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    $this->load->model("Friend");
  }

  public function show()
  {
    $this->load->view("friends");
  }

  public function create()
  {
    $this->Friend->create($this->input->post());

    // $this->Friend->get_your_friends();
    
    redirect("/success");
  }



}