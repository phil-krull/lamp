<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //load the model
    $this->load->model("Book");
    $this->load->model("Review");
  }

  public function new_review()
  {
    //query a list of authors from DB

    $this->load->view("Reviews/new_review");
  }

  public function create()
  {
    $title = $this->input->post('title');
    $author = $this->input->post('author');

    //check to see if book already exists in DB
    $book_id = $this->Book->check_book($title, $author);

    //depending on if the book already exist:
    //if book does not exist
    //add the book
    if(!$book_id)
    {
      $this->Book->create($title, $author);
      $book_id = $this->Book->get_most_recent_book();
    }

    //add review under that book
    $this->Review->create($book_id['id'], $this->input->post(), $this->session->userdata('id'));
    redirect("/books/" . $book_id['id']);

    //if book exist
  }

  public function destroy($review_id)
  {
    $this->Review->destroy($review_id);
    redirect("/books/" . $this->input->post('book_id'));
  }
}