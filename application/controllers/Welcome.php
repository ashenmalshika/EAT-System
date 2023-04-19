<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('qrscan');
	}

	public function Login()
	{
		$this->load->view('login');
	}

	public function markattendance($sessionID)
	{
		$this->load->view('attendancemark');
	}

	public function markattendancecompleted($sessionID,$serviceID)
	{
		$this->load->view('attendancemarkcompleted');
	}

	public function feedbackform($sessionID,$serviceID)
	{
		$this->load->view('feedbackform');
	}

	public function addServiceidToDB($section2){	
        $this->load->model('addserviceid_model');    
        $response=$this->addserviceid_model->addServiceId($section2);
        if($response){
			$serviceID = $this->input->post('serviceid-input');
			$this->session->set_flashdata('message', 'Attendance Marked!');
			redirect('Welcome/markattendancecompleted/'.$section2.'/'.$serviceID);      
        }    
    }

	public function thankmsg()
	{
		$this->load->view('finalpage');
	}
}
?>