<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

 //Method to show login form
  public function new_session()
  {
    $this->load->view('Session/new_session');
  }

  //Method to do the actual logging
  public function create()
  {
    //load the model
      $this->load->model("User");

    //delegate the task of checking user input to the model
      $user = $this->User->get_user_by_email($this->input->post('email'));

      if ($user && password_verify($this->input->post('password'), $user['password']))
      {
        $user_info = array(
          'id' => $user['id'],
          'first_name' => $user['first_name'],
          'last_name' => $user['last_name'],
          'is_logged_in' => TRUE,
          );

        $this->session->set_userdata($user_info);
        redirect("/success");
      }

      else
      {
        $this->session->set_flashdata("error", "Invalid password or email");
        redirect('/sessions/new');
      }

    //depending on the result, show error or log in user
  }

  public function success()
  {
    if ($this->session->userdata('is_logged_in') == FALSE)
    {
      redirect('/sessions/new');
    }
    $this->load->view("success");
  }

  public function destroy()
  {
    $this->session->sess_destroy();
    redirect('/');
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */