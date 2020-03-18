<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RetrieveVal extends CI_Controller
{
  public function val()
  {
    if($this->input->post('sub'))
    {
        $em=$this->input->post('email');
        $data['emv']=$em;
        $data['dept']=$this->input->post('department');
        $data['terms']=$this->input->post('term');
        $data['newl']=$this->input->post('news');
        $data['user']=$this->input->post('user');
        $this->load->view('submittedval',$data);

    }

  }
}
