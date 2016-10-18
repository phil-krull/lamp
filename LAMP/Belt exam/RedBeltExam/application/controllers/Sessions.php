<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

  public function index()
  {
    $this->load->view("/Home");
  }

  public function destroy()
  {
    $this->session->sess_destroy();
    redirect ('/');
  }
  public function new_session()
  {
    $this->load->model("User");

    $user = $this->User->get_user_by_username($this->input->post('username'));

    if($user && password_verify($this->input->post('password'), $user['password']))
    {
      $user_info = array(
        'user_id' => $user['id'],
        'name' => $user['name'],
        'username' => $user['username'],
        'is_logged_in' => TRUE
      );
      // var_dump($user_info);
      // die();
      $this->session->set_userdata($user_info);
      redirect('/trip/trips');
    }
    else
    {
     $this->session->set_flashdata("session_error", "Invalid username or password");
      redirect("/");
    }
  }
}