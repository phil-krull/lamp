<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

  public function create($post)
  {
    $query = "INSERT INTO users (name, alias, email, password, date_of_birth, created_at, updated_at) VALUES (?,?,?,?,?, NOW(), NOW())";

    $values = array(
      $post['name'],
      $post['alias'],
      $post['email'],
      password_hash($post['password'],PASSWORD_BCRYPT),
      $post['date_of_birth'],
      );
    return $this->db->query($query, $values);
  }

  public function get_user_by_email($email)
  {
    $query = "SELECT * FROM users WHERE email = ?";
    $value = array($email);

    return $this->db->query($query, $value)->row_array();
  }

  public function validate($post)
  {
    $this->form_validation->set_rules("name", "Name", "required");
    $this->form_validation->set_rules("alias", "Alias", "required");
    $this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users.email]");
    $this->form_validation->set_rules("password", "Password", "required|matches[password_confirmation]|min_length[8]");
    $this->form_validation->set_rules("password_confirmation", "Confirm password", "required");
    $this->form_validation->set_rules("date_of_birth", "Birth Date", "required");

    return $this->form_validation->run();

  }

}