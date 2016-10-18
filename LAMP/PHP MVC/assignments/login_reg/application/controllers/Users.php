<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function index() {
    $this->load->view('Users/index');
  }

  public function welcome() {
    $this->load->view('Users/welcome');
  }

  public function create() {
    $this->load->model('User');
    $this->load->library('form_validation');
    $validation_result = $this->User->validate($this->input->post());

    if($validation_result == TRUE) {
      $this->User->create($this->input->post());
    } else {
      $this->session->set_flashdata('errors', validation_errors());
    }
      redirect('/');
  }
}