<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model("product");
  }

  public function index() {
    $product = $this->product->index();
    $this->load->view('Products/index', array('products' => $product));
  }

  public function newpro() {
    $this->load->view('Products/new');
  }

  public function create() {
    $this->load->library('form_validation');
    $validation_result = $this->product->validate($this->input->post());

    if ($validation_result == TRUE) {
      $this->product->create($this->input->post());
      redirect('/products');
    } else {
      $this->session->set_flashdata('errors', validation_errors());
      redirect('/products/newpro');
    }
  }

  public function show($product_id) {
    $product = $this->product->show($product_id);
    $this->load->view('Products/show', array('product' => $product));
  }

  public function edit($product_id) {
    $product = $this->product->show($product_id);
    $this->load->view('Products/edit', array('product' => $product));
  }

  public function destroy($product_id) {
    $this->product->destroy($product_id);
    redirect('/');
  }

  public function update($product_id) {
    // var_dump($this->input->post());
    // die;
    $this->product->update($product_id, $this->input->post());
    redirect('/');
  }

} 