<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {

	public function did_delete_row($id){
    $this ->db -> where('id', $id);
    $a=$this ->db ->delete('admin');
    return true;

}

public function delete_cat($id){
    $this ->db -> where('id', $id);
    $a=$this ->db ->delete('categorytable');
    return true;

}


public function get_data($tbl)
{
	{
		$sql=$this->db->get($tbl);
		//('admin');
		return $sql->result_array();
	}
}



	public function insert_data($tbl,$data)
	{
		$sql=$this->db->insert($tbl,$data);
		//('admin');insert
		return true;
	}

public function insert_msg($tbl,$data)
	{
		$sql=$this->db->insert($tbl,$data);
		//('admin');insert
		return true;
	}

 public function update_record( $tbl,$data,$id)
	{
		$this ->db -> where('id', $id);
		$this->db->update($tbl, $data);
		return true;
		
	}

	public function update_cat( $tbl,$data,$id)
	{
		$this ->db -> where('id', $id);
		$this->db->update($tbl, $data);
		return true;
		
	}


public function check_data($email,$password){

      $query=$this->db->get_where('admin', array('email'=>$email, 'password'=>$password));
      if($query){
      return $query->row_array();
      }
}
}


//public function t_edit_row($id){
   //$update = array(
            //'name' => $this->input->post('name'),
            //'email' => $this->input->post('email'),
            //'password' => $this->input->post('password'),
            // 'phone' => $this->input->post('phone'),
             // 'address' => $this->input->post('address'),
              // 'age' => $this->input->post('age')
           // );
       // $this->db->where('id',$id);
       // return $this->db->update('admin', $update);
//}


	
	