<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('employee_model');
  }


	public function index()
	{

		$this->load->view('employee_form');

	}

  public function employee_form()
  {
    //print_r($_POST);
    $save=array(
                    'emp_name'=>$this->input->post('emp_name'),
                    'emp_gender'=>$this->input->post('emp_gender'),
                    'emp_email'=>$this->input->post('emp_email'),
                    'emp_phone'=>$this->input->post('emp_phone'),
                    'emp_address'=>$this->input->post('emp_address')
              );
              $this->employee_model->saveEmployee($save);

            redirect('employee/get_data');



  }
  function get_data(){
       $getData['arrData'] = $this->employee_model->fetch_data();
       $this->load->view('employee',$getData);

  }

function change_data()
{
    $this->employee_model->update_data();
   echo "Updated successfully";


}

function delete_data()
{
    $this->employee_model->delete_data();
   echo "Deleted successfully";
   

}


}

?>
