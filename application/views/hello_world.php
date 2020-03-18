<?php
echo "<br>"."Welcome User ";
$this->load->helper('html');
echo heading('Welcome!!',3);
echo br(2);

$list=array('red','green','blue');
$att=array('class'=>'color','id'=>'col');
echo ul($list,$att);
?>
