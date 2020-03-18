<?php
    class Tesformmodel extends CI_Model{
        function process(){

                    $en = $this->input->post('ename');
                    $eid = $this->input->post('empid');
                    $data = array(
                        'name'=>$en,//column name
                        'id'=>$eid
                    );
                    $this->db->insert('employee',$data);
            }

function getUsers()
{

//functions allow you to build SQL SELECT statements.
//$this->db->from('employee');

//Runs the selection query and returns the result. Can be used by itself to retrieve all records from a table:
  //$query=$this->db->get();


		/*$this->db->select('name');
		$this->db->order_by("name","desc");  //asc,rand
		$this->db->limit(2);
		$this->db->where('id<',56);*/
    $this->db->from('employee');
		$query=$this->db->get();


		/*This function returns the query result as an array of objects, or an empty array on failure. */
		return $query->result();

        }

function updateUser()
{
  echo "inside update";
  $en = $this->input->post('ename');
  $eid = $this->input->post('empid');
echo $en;
echo $eid;
  $data=array(
    'name'=>$en
                  );
$this->db->where('id',$eid);
$this->db->update('employee',$data);
$row=$this->db->affected_rows();
echo $row;
return $row;
}

function deleteUser()
{
  echo "inside delete";
  //$en = $this->input->post('ename');
  $eid = $this->input->post('empid');
//echo $en;
echo $eid;
$this->db->where('id',$eid);
$this->db->delete('employee');
$row=$this->db->affected_rows();
echo $row;
return $row;
}
        }
?>
