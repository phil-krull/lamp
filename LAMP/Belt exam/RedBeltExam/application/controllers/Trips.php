<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trips extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Trip");
  }

  public function index()
  {
    $this->load->view("/Trip");
  }

  public function create()
  {
    //trip destination to database
    $this->load->library("form_validation");

    $validation_result = $this->Trip->validate($this->input->post());

    if ($validation_result == TRUE)
    {

    $this->Trip->create($this->input->post(), $this->session->userdata('id'));

    $destination = "You added you destination successfully";

    $this->session->set_flashdata("success", $destination);

    redirect("/trip/trips");
    }
    else
    {
      $this->session->set_flashdata("errors", validation_errors());

      redirect("/trip/new");
    }
  }

  public function get_trips()
  {
    $your_destinagions = $this->Trip->get_your_trips($this->session->userdata('id'));
    // var_dump($your_destinagions);
    // die();

    $desired_designations = $this->Trip->get_posted_trips($this->session->userdata('id'));

    $this->load->view("/Home", array("desired_designations" => $desired_designations, "your_destinagions" => $your_destinagions));
  }
}