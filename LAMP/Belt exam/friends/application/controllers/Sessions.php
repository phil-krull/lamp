<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    $this->load->model("User");
    $this->load->model("Friend");
    
  }

  //Method to do the actual logging
  public function create()
  {
    //load the model

    //delegate the task of checking user input to the model
      $user = $this->User->get_user_by_email($this->input->post('email'));

      if ($user && password_verify($this->input->post('password'), $user['password']))
      {
        $user_info = array(
          'id' => $user['id'],
          'name' => $user['name'],
          'alias' => $user['alias'],
          'is_logged_in' => TRUE,
          );

        $this->session->set_userdata($user_info);
        redirect("/success");
      }

      else
      {
        $this->session->set_flashdata("error", "Invalid password or email");
        redirect('/');
      }

    //depending on the result, show error or log in user
  }

  public function success()
  {
    if ($this->session->userdata('is_logged_in') == FALSE)
    {
      redirect('/');
    }
    $id = $this->session->userdata('id');

    $friends = $this->Friend->get_friends($id);

    $this->load->view("/friends", array("friends" => $friends));
  }

  public function destroy()
  {
    $this->session->sess_destroy();
    redirect("/");
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */