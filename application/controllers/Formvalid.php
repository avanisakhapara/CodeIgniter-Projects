<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formvalid extends CI_Controller
{
  public function index()
  {
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->helper('html');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email','Email Address','trim|required|valid_email|min_length[8]');
    $this->form_validation->set_rules('department','Department Name','required');
    //$this->form_validation->set_rules('term','Terms and condition','required');

if($this->form_validation->run()==true)
{
if($this->input->post('sub'))
{
    $data['email']=$this->input->post('email');
    $data['dept']=$this->input->post('department');
    $data['terms']=$this->input->post('term');
    $data['newl']=$this->input->post('news');
    $data['user']=$this->input->post('user');
    $this->load->view('view_valid',$data);
}
}
else
{
  $this->load->view('view_valid');
}
}
}
 ?>
