<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function index()
  {
    $this->load->view('User/welcome');
  }

   //Method to show registration form
  public function new_user()
  {
    $this->load->view("User/new_user");
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

      //Go to the log in page
      redirect('/sessions/new');
      }
    else
    {
      //or show user
      $this->session->set_flashdata("errors", validation_errors());

      //go back to registration form
      redirect("/users/new");
    }

  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */