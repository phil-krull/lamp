<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    $this->load->model("Book");
    $this->load->model("Review");
  }

  public function index()
  {
    //get most recent reviews
    $reviews = $this->Review->get_most_recent_reviews();

    $this->load->view("/Books/index", array("reviews" => $reviews));
  }

  public function show($id)
  {
    //go to the DB to get the book
    $book = $this->Book->get_book_by_id($id);

    $reviews = $this->Review->get_reviews_by_book($id);

    //load the view and pass the book
    $this->load->view("Books/show", array("book" => $book, "reviews" => $reviews));
  }
}