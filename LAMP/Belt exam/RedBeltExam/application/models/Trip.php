<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trip extends CI_Model 
{
  public function create($post, $id)
    {
      // var_dump($user_id);
      // die();
      $query= "INSERT INTO destinations (location, user_id, description, start, end, created_at, updated_at) VALUES (?,?,?,?,?, NOW(), NOW())";

      $values = array(
        $post['location'],
        $id,
        $post['description'],
        $post['start'],
        $post['end'],
        );

      return $this->db->query($query, $values);
    }

  public function validate($post)
  {
    $this->form_validation->set_rules("location", "Location", "required");
    $this->form_validation->set_rules("description", "Description", "required");
    $this->form_validation->set_rules("start", "Travel Date From", "required");
    $this->form_validation->set_rules("end", "Travel Date To", "required");

    return $this->form_validation->run();
  }

  public function get_posted_trips($id)
  {
    $query = "SELECT users.name, destinations.id, destinations.location, destinations.description, destinations.start, destinations.end FROM destinations JOIN users on destinations.user_id = users.id WHERE user_id != $id";
    return $this->db->query($query)->result_array();
  }

  public function get_your_trips($id)
  {
    $query = "SELECT location, description, start, end FROM destinations WHERE user_id = $id";
    return $this->db->query($query)->result_array();
  }

  public function get_trip($id)
  {
    $query = "SELECT users.name, destinations.location, destinations.description, destinations.start, destinations.end FROM destinations JOIN users on destinations.user_id = users.id WHERE destinations.id = $id";
    return $this->db->query($query)->row_array();
  }

  public function add_post_trip($id, $user_id)
  {
    $query= "INSERT INTO user_has_destination (user_id, destination_id, created_at, updated_at) VALUES ($user_id, $id, NOW(), NOW())";

      return $this->db->query($query);
  }
}