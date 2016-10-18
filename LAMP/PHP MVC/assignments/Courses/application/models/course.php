<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class course extends CI_Model {

  public function validate($post)
  {
    $this->form_validation->set_rules("name", "Course name", "min_length[10]|required");
  
    return $this->form_validation->run();
  }

  public function create($post)
  {
    // var_dump($this->input->post());
    // die();
    $query = "INSERT INTO courses (name, Description, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
    $values = array(
      $post['name'],
      $post['description'],
      );
    return $this->db->query($query, $values);
  }

  public function show_course()
  {
    $query = "SELECT id, name, Description, created_at FROM courses ORDER BY courses.id DESC";
    return $this->db->query($query)->result_array();
  }

  public function destroy($course_id)
  {
    $query = "DELETE FROM courses WHERE id = ?";
    $values = array($course_id);
    return $this->db->query($query, $values);
  }
} 