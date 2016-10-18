<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review extends CI_Model {

  public function create($book_id, $post, $user_id)
  {
    $query = "INSERT INTO reviews (review, rating, user_id, book_id, created_at, updated_at) VALUES (?,?,?,?, NOW(), NOW())";
    $values = array(
      $post['review'],
      $post['rating'],
      $user_id,
      $book_id
      );
    return $this->db->query($query, $values);
  }

  public function get_reviews_by_book($book_id)
  {
    $query = "SELECT r.id, r.review, r.rating, r.user_id, r.created_at, r.book_id, users.alias FROM reviews as r JOIN users ON users.id = r.user_id WHERE book_id = ?";
    $values = array($book_id);
    return $this->db->query($query, $values)->result_array();
  }

  public function destroy($review_id)
  {
    $query = "DELETE FROM reviews WHERE id = ?";
    $values = array($review_id);
    return $this->db->query($query, $values);
  }

  public function get_most_recent_reviews()
  {
    $query = "SELECT r.rating, r.review, r.created_at, users.alias, books.title, books.id, r.user_id FROM reviews as r JOIN users on users.id = r.user_id JOIN books on books.id = r.book_id ORDER BY r.id DESC LIMIT 3;";
    return $this->db->query($query)->result_array();
  }

}