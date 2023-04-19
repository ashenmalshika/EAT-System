<?php

class Dashboard extends CI_Controller{
    public function createsession(){
        $this->load->view('template/header');
        $this->load->view('template/topmenu');
        $this->load->view('template/sidemenu');

        $this->load->model('addsessiondetails_model');
        $sessions=$this->addsessiondetails_model->getsessiondetails();

        $this->load->view('template/createsessioncontent',['sessions'=>$sessions]); 
        $this->load->view('template/footer');
    }

    public function showpastsessions(){
        $this->load->view('template/header');
        $this->load->view('template/topmenu');
        $this->load->view('template/sidemenu');

        $this->load->model('addsessiondetails_model');
        $sessions=$this->addsessiondetails_model->getpastsessiondetails();

        $this->load->view('template/showpastsessions',['sessions'=>$sessions]); 
        $this->load->view('template/footer');
    }
    public function showattendance(){
		$this->load->view('template/header');
        $this->load->view('template/topmenu');
        $this->load->view('template/sidemenu');
        $this->load->view('template/showattendancecontent');
        $this->load->view('template/footer');
	}
	public function showfeedback(){
		$this->load->view('template/header');
        $this->load->view('template/topmenu');
        $this->load->view('template/sidemenu');
        $this->load->view('template/showfeedback');
        $this->load->view('template/footer');
	}
    public function addSessionToDB(){
        $this->load->model('addsessiondetails_model');    
        $response=$this->addsessiondetails_model->adddetails();
        if($response){
            redirect('Dashboard/createsession');
        }    
    }
    public function deletesession($session_id) {
        // Move row to the deletedsessions table of database
        $this->db->where('SessionID', $session_id);
        $session = $this->db->get('sessionstable')->row();
        $this->db->insert('deletedsessions', $session);
        
        // Delete row from the sessionstable table of database
        $this->db->where('SessionID', $session_id);
        $this->db->delete('sessionstable');
        
        redirect('Dashboard/createsession');
    }
}?>