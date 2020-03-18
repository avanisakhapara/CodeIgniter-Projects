<html>
<body>
  <?php
if(isset($email)  && isset($dept))
{
  echo validation_errors();
echo 'email add:'.$email;
echo br();
echo 'department:'.$dept;
echo br();
echo 'terms accepted:'.$terms;
echo br();
echo 'newsletter accepted:'.$newl;
echo br();
echo 'user type:'.$user;
echo br();
}
else
{
//textbox
echo validation_errors();
//$hidden = array("current_url"=>current_url());

//echo $current_url;
echo form_open();
echo form_fieldset('Email Address');
$data = array(
          "name"=>"email",
          "value"=>"Enter your email id");
$js='onClick="alert(\'due to click\')"';
echo form_input($data,'',$js);
//echo form_input('email',set_value('email'),$js);
echo form_fieldset_close();
echo br();

//dropdown
echo form_fieldset("Choose department");
$option = array(
      "it"=>"Information technology",
      "comp"=>"Computer",
      "mech"=>"Mechanical");
echo form_dropdown('department',$option,'it');
echo form_fieldset_close();
echo br();

//checkbox
echo form_fieldset("Terms and conditions");
echo form_label('Do you accept the terms and conditions?','term');
echo form_checkbox('term','yes',true);
echo br();
//checkbox using Array
echo form_label('Do you want to subscribe to newsletter?','news');
$data = array(
    'name'=>'news',
    'value'=>'no',
    'checked'=>false);
echo form_checkbox($data);
echo form_fieldset_close();
echo br();

//radio button
echo form_fieldset('Student or Professor');
echo form_label('Student','user');
echo form_radio('user','student',true);
echo form_label('Professor','user');
echo form_radio('user',2);
echo form_fieldset_close();
echo br();

//submit button
echo form_submit('sub','Submit');

echo form_close();
}
   ?>
</body>

</html>
