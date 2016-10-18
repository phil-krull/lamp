<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

  public function __construct()
  {
    parent:: __construct();
    $this->load->model("course");
  }

  public function index()
  {
    $current_course = $this->course->show_course();
    $this->load->view('main', array('current_courses' => $current_course));
    $this->output->enable_profiler(TRUE);
  }
  public function new_course()
  {
    $this->load->library('form_validation');

    $validation_result = $this->course->validate($this->input->post());


    if($validation_result == TRUE)
    {
      $this->session->set_flashdata('success', 'Course submitted successfully');

      $this->course->create($this->input->post());
      redirect('main');
    }

    else
    {
      $this->session->set_flashdata('error', validation_errors());
      redirect('index');
    }
  }
  public function destroy($course_id)
  {
    $this->course->destroy($course_id);
    redirect('main');
  }
}