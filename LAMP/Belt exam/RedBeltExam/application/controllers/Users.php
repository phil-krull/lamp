<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model("User");
  }

  public function index()
  {
    $this->load->view("/Login");
  }

  public function create()
  {
    //Set up new user
    $this->load->library("form_validation");

    $validation_result = $this->User->validate($this->input->post());

    if ($validation_result == TRUE)
    {

    $this->User->create($this->input->post());

    $log_in = "Thank you for registering, please log in to continue.";

    $this->session->set_flashdata("logged_in", $log_in);

    redirect("/");

    // redirect("/session/new");
    }
    else
    {
      $this->session->set_flashdata("errors", validation_errors());

      redirect("/");
    }
  }


}