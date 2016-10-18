<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model 
{
  public function create($post)
    {
      $query= "INSERT INTO users (name,username, password, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";

      $values = array(
        $post['name'],
        $post['username'],
        password_hash($post['password'],PASSWORD_BCRYPT)
        );

      return $this->db->query($query, $values);
    }

  public function validate($post)
  {
    $this->form_validation->set_rules("name", "Name", "required|min_length[3]");
    $this->form_validation->set_rules("username", "Username", "required|min_length[3]");
    $this->form_validation->set_rules("password", "Password", "required|min_length[8]|matches[confirm_password]");
    $this->form_validation->set_rules("confirm_password", "Confirm password", "required");

    return $this->form_validation->run();
  }

  // public function get_user_id()
  // {
  //   $query= "SELECT user_id FROM users";
  //   $this->db->query($query)->row_array();

  //   $this->session->set_userdata("user_id", $user_id);
  //   var_dump($user_id);
  //   // redirect('Trip/create');
  // }

  public function get_user_by_username($username)
  {
    $query= "SELECT * FROM users WHERE username = ?";
    $value = array($username);
    // var_dump($username);
    // die();
    return $this->db->query($query, $value)->row_array();
  }

}