<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TestDemo extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    echo '<b>inside constructor</b>';
  }
public function myfun($fname,$lname,$age=25)
{
$this->load->view('header.html');
//$this->load->view('hello_world');
//echo '<br><b>Welcome '.$fname.' '.$lname.'</b>';
//echo '<br> Age is '.$age;

//$data=array('first'=>$fname,'last'=>$lname);
$str=$this->load->view('userinfo',"",true);
echo "contents of view".$str;

}

public function index()
{
  echo 'inside index action';

  $this->load->model('modelex');
  $this->modelex->printex();
}


}
?>
