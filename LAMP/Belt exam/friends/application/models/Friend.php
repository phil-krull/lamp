<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friend extends CI_Model {

  public function get_friends($id)
  {
    $query = "SELECT * FROM users WHERE id != ?";
    $values = array($id);
    return $this->db->query($query, $values)->result_array();
  }

  public function create($post)
  {
    $query = "INSERT INTO friends_has_users (user_id, friend_id, created_at, updated_at) VALUES (?,?, NOW(), NOW())";
    $values = array($post['user_id'], $post['friend_id']);
    return $this->db->query($query, $values);
  }

  // public function get_your_friends()
  // {
  //   $query = "SELECT ";
  // }
}