<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model
 {
    public function saveEmployee($data)
  	 {
  		  $this->db->insert('ciproject_employee',$data);   // Inserting data in ciproject_employee table

                         //Insert id in $emp_id variable
  	 }

    public function fetch_data()
    {
     $query=$this->db->query("select * from ciproject_employee");    //its a string

     $result = $query->result_array();
     return $result;

    }

    public function update_data()
    {
      $data = array(
                      'emp_address' => 'London',
                      'emp_name'  => 'Afnan',

                  );

      $this->db->where('emp_id', '10');
      $this->db->update('ciproject_employee',$data);
    }

    public function delete_data()
    {
      $this->db->where('emp_id', '25');
      $this->db->delete('ciproject_employee');
    }

  }

?>
