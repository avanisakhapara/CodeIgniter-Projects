
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model
{
  public function getDetails()
  {
    $detail=array("username"=>'RishiM',"age"=>20);
    return $detail;
  }
}
?>
