<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Destinations extends CI_Controller {

  public function index()
  {
    $this->load->view("/destinations");
  }
  public function get_trip($id)
  {
    $this->load->Model("Trip");

    $selected_trip = $this->Trip->get_trip($id);
    // var_dump($selected_trip);
    // die();

    $this->load->view("destinations", array("selected_trip" => $selected_trip));
  }

  public function add_post_trip($id, $id)
  {
    $this->load->Model("Trip");

    $this->Trip->add_post_trip($id, $id);

    redirect('sessions');
  }
}