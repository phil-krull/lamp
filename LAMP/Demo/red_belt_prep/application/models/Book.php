<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Model {

    public function check_book($title, $author)
  {
    $query = "SELECT id FROM books where title = ? AND author = ?;";
    $values = array($title, $author);

    return $this->db->query($query, $values)->row_array();
  }

  public function create($title, $author)
  {
    $query = "INSERT into books (title, author, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
    $values = array($title, $author);

    return $this->db->query($query, $values);
  }

  public function get_most_recent_book()
  {
    $query = "SELECT id FROM books ORDER BY id DESC LIMIT 1";
    return $this->db->query($query)->row_array();
  }

  public function get_book_by_id($book_id)
  {
    $query = "SELECT * FROM books WHERE id = ?";
    $values = array($book_id);
    return $this->db->query($query, $values)->row_array();
  }
}