<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    //Load the model
    $this->load->model("User");
    $this->load->model("Review");
    $this->load->model("Book");
    
  }

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
  public function show($user_id)
  {
    $user = $this->User->get_user_with_reviews($user_id);

    $this->load->view("User/show", array("user" => $user));
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */