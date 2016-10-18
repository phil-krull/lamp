<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function index()
  {
    $this->load->view('Users/main');
  }

   //Method to show registration form
  public function new_user()
  {
    $this->load->view("Users/main");
  }

  //Method to actually create the user
  public function create()
  {
    //Load the model
    $this->load->model("User");

    //check user input
    $this->load->library("form_validation");

    //delegate the task of validating user
    $validation_result = $this->User->validate($this->input->post());

    //depending on the validating check, register user or show errors
    if ($validation_result == TRUE)
      {
      //Delegate the task of create an user to the Model
      $this->User->create($this->input->post());

      $log_in = "Thank you for registering, please log in to continue.";

      $this->session->set_flashdata("log_in", $log_in);

      //Go to the log in page
      redirect('/');
      }
    else
    {
      //or show user
      $this->session->set_flashdata("errors", validation_errors());

      //go back to registration form
      redirect("/");
    }

  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */