<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

  public function index() {
    $query = "SELECT * FROM product";
    return $this->db->query($query)->result_array();
  }

  public function create($post) {
    $query = "INSERT INTO product (name, description, price, created_at, updated_at) VALUES (?,?,?, NOW(),NOW())";
    $values = array(
      $post['name'],
      $post['description'],
      $post['price']
      );
    return $this->db->query($query, $values);
  }

  public function validate($post) {
    $this->form_validation->set_rules("name", "Name", "required");
    $this->form_validation->set_rules("description", "Description", "required");
    $this->form_validation->set_rules("price", "Price", "required|numeric");

    return $this->form_validation->run();
  }

  public function show($product_id) {
    $query = "SELECT * FROM product WHERE id = ?";
    $values = array($product_id);
    return $this->db->query($query, $values)->row_array();
  }

  public function destroy($product_id) {
    $query = "DELETE FROM product WHERE id = ?";
    $values = array($product_id);
    return $this->db->query($query, $values);
  }

  public function update($product_id, $post) {
    $query = "UPDATE product SET name = ?, description = ?, price = ?, updated_at = NOW() WHERE id = $product_id";
    $values = array(
      $post['name'],
      $post['description'],
      $post['price']
      );
    return $this->db->query($query, $values);
  }



}