<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller // controller class
{
	public function __construct()
	{
		parent::__construct();
		echo "inside constructor";
	}
	public function _remap($x)
	{

		if($x=='index')
		$this->demo();


	}
	public function demo()  //default method of controller
 {

/*$name['fname']="Alia";
$name['lname']="shah";
$this->load->view('hello_world',$name);*/
$this->load->view('welcome_message');
echo "I am inside test myfun Method";


 }

 public function index()
 {
	 echo 'inside index';
 }

}
?>
