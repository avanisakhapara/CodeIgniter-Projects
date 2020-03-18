<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paramex extends CI_Controller
{

  /*public function __construct()
  {
    parent::__construct();
    echo "inside constructor</br>";
  }*/
 /*public function _remap($method)
 {

    if($method=='login')
    {
      $this->index();
    }


 }*/
  public function index()
  {
    echo "inside index function";
  }

  public function home($fname,$lname="shah")
  {
    echo "inside home";

    $this->load->model('model_user','user');
    $info = $this->user->getDetails();

    $this->load->view('header.html');
    //$data=array("fn"=>$fname, "ln"=>$lname); //passing $data as array
    $data['fn']=$fname; //passing $data as object
    $data['ln']=$lname;
    $data['uinfo']=$info;
    print_r($data);
    $this->load->view('welcome_user',$data);
    //echo "view".$tt;


    //$this->load->view('footer');
  }
}
 ?>
