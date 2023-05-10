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

	public function enterserviceid($sessionID)
	{
		$this->db->select('*');
		$this->db->from('sessionstable');
		$query = $this->db->get();
		$data['sessions'] = $query->result_array();
		$this->load->view('serviceidinputpage',$data);
	}

	public function startcamera($section2)
	{
		echo $section2;
		$serviceID = $this->input->post('serviceid-input');
		echo $serviceID;
		redirect('Welcome/takephoto/'.$section2.'/'.$serviceID);
	}

	public function markattendance($sessionID)
	{
		$this->db->select('*');
		$this->db->from('sessionstable');
		$query = $this->db->get();
		$data['sessions'] = $query->result_array();
		$this->load->view('attendancemark',$data);
	}

	public function takephoto($sessionID,$serviceID)
	{
		$this->load->view('cameraforattendancemark');
	}

	public function markattendancecompleted($sessionID,$serviceID)
	{
		$this->load->view('attendancemarkcompleted');
	}

	public function feedbackform($sessionID,$serviceID)
	{
		$this->load->view('feedbackform');
	}

	public function addServiceidToDB($section2) {
		$this->load->model('addserviceid_model');    
		$serviceID = $this->input->post('serviceid-input');
	
		// Check SessionID & ServiceID
		$rowExists = $this->addserviceid_model->checkRow($section2, $serviceID);
	
		if ($rowExists) {
			$this->session->set_flashdata('message', 'Attendance already marked <br> Thank you.');
			$this->load->view('messagepage');
		} else {
			$response = $this->addserviceid_model->addServiceId($section2);
			
			if ($response) {
				$this->session->set_flashdata('message', 'Attendance Marked!');
				redirect('Welcome/markattendancecompleted/'.$section2.'/'.$serviceID);      
			}
		}
	}
	

	public function thankmsg()
	{
		$this->load->view('finalpage');
	}
}
?>