<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formdesign extends CI_Controller
{
  public function index()
  {
    //$this->load->helper('url');
    //$this->load->helper('form');
    //$this->load->helper('html');

/*if($this->input->post('sub'))
{
    $data['email']=$this->input->post('email');
    $data['dept']=$this->input->post('department');
    $data['terms']=$this->input->post('term');
    $data['newl']=$this->input->post('news');
    $data['user']=$this->input->post('user');
    $this->load->view('view_regis',$data);
}
else
{*/
  $this->load->view('view_regis');
//}
}
}
 ?>
