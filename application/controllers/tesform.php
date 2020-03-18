<?php
    class Tesform extends CI_Controller{

        function index(){
        //  $this->load->helper('form')
            $this->load->view('formview');
            }

        function save(){
            $this->load->model('tesformmodel');
            if($this->input->post('submit')){
                $this->tesformmodel->process();
                }
            if($this->input->post('update')){
                    $row=$this->tesformmodel->updateUser();
                    if($row>=1)
                    {
                      echo "inside if";

                    }


                    }
              if($this->input->post('delete')){
                            $row=$this->tesformmodel->deleteUser();
                            if($row>=1)
                            {
                              echo "inside delete if";

                            }


                            }

$this->load->view('formview');
}
/*function changeinfo()
{
  echo 'inside change fun';
  $this->load->model('tesformmodel');
  $result=$this->tesformmodel->updateUser();
  /*if($result>=1)
  {
    echo "inside if";
    $result['msg']='data updated successfully';
  }
  print_r($result);
  $this->load->view('formview',$result);
}*/

function allusers()
{
  $this->load->model('tesformmodel');
  $result['data']=$this->tesformmodel->getUsers();
  $this->load->view('show',$result);
}
        }
?>
