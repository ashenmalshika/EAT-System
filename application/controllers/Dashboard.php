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
        $this->load->model('showattendancemodel');
        $keyword = $this->input->post('keyword');
		$data['attendance_results']=$this->showattendancemodel->get_all_list($keyword);

		$this->load->view('template/header');
        $this->load->view('template/topmenu');
        $this->load->view('template/sidemenu');
        $this->load->view('template/showattendancecontent',$data);
        $this->load->view('template/footer');
	}
	public function showfeedback(){
        $this->load->model('feedbackmod');
		$this->load->model('showfeedbackmodel');

        $keyword = $this->input->post('keyword');
		$data['count']=$this->feedbackmod->count_list($keyword);

		//ANSWER 1................................................................................................
		$data['a1_disagree']=$this->feedbackmod->a1_disagree($keyword);
		$data['a1_agree']=$this->feedbackmod->a1_agree($keyword);
		$data['a1_strongly_agree']=$this->feedbackmod->a1_strongly_agree($keyword);
		$data['a1_strongly_disagree']=$this->feedbackmod->a1_strongly_disagree($keyword);
		$data['a1_niether_agree_nor_disagree']=$this->feedbackmod->a1_niether_agree_nor_disagree($keyword);
        
		//ANSWER 2................................................................................................
		$data['a2_disagree']=$this->feedbackmod->a2_disagree($keyword);
		$data['a2_agree']=$this->feedbackmod->a2_agree($keyword);
		$data['a2_strongly_agree']=$this->feedbackmod->a2_strongly_agree($keyword);
		$data['a2_strongly_disagree']=$this->feedbackmod->a2_strongly_disagree($keyword);
		$data['a2_niether_agree_nor_disagree']=$this->feedbackmod->a2_niether_agree_nor_disagree($keyword);

		//ANSWER 3................................................................................................
		$data['a3_disagree']=$this->feedbackmod->a3_disagree($keyword);
		$data['a3_agree']=$this->feedbackmod->a3_agree($keyword);
		$data['a3_strongly_agree']=$this->feedbackmod->a3_strongly_agree($keyword);
		$data['a3_strongly_disagree']=$this->feedbackmod->a3_strongly_disagree($keyword);
		$data['a3_niether_agree_nor_disagree']=$this->feedbackmod->a3_niether_agree_nor_disagree($keyword);
        //ANSWER 4................................................................................................
		$data['a4_disagree']=$this->feedbackmod->a4_disagree($keyword);
		$data['a4_agree']=$this->feedbackmod->a4_agree($keyword);
		$data['a4_strongly_agree']=$this->feedbackmod->a4_strongly_agree($keyword);
		$data['a4_strongly_disagree']=$this->feedbackmod->a4_strongly_disagree($keyword);
		$data['a4_niether_agree_nor_disagree']=$this->feedbackmod->a4_niether_agree_nor_disagree($keyword);
        //ANSWER 5................................................................................................
		$data['a5_disagree']=$this->feedbackmod->a5_disagree($keyword);
		$data['a5_agree']=$this->feedbackmod->a5_agree($keyword);
		$data['a5_strongly_agree']=$this->feedbackmod->a5_strongly_agree($keyword);
		$data['a5_strongly_disagree']=$this->feedbackmod->a5_strongly_disagree($keyword);
		$data['a5_niether_agree_nor_disagree']=$this->feedbackmod->a5_niether_agree_nor_disagree($keyword);
        //ANSWER 6................................................................................................  
		$data['a6_disagree']=$this->feedbackmod->a6_disagree($keyword);
		$data['a6_agree']=$this->feedbackmod->a6_agree($keyword);
		$data['a6_strongly_agree']=$this->feedbackmod->a6_strongly_agree($keyword);
		$data['a6_strongly_disagree']=$this->feedbackmod->a6_strongly_disagree($keyword);
		$data['a6_niether_agree_nor_disagree']=$this->feedbackmod->a6_niether_agree_nor_disagree($keyword);
        //ANSWER 7................................................................................................
		$data['a7_disagree']=$this->feedbackmod->a7_disagree($keyword);
		$data['a7_agree']=$this->feedbackmod->a7_agree($keyword);
		$data['a7_strongly_agree']=$this->feedbackmod->a7_strongly_agree($keyword);
		$data['a7_strongly_disagree']=$this->feedbackmod->a7_strongly_disagree($keyword);
		$data['a7_niether_agree_nor_disagree']=$this->feedbackmod->a7_niether_agree_nor_disagree($keyword);

        //ANSWER 8................................................................................................
		$data['a8_disagree']=$this->feedbackmod->a8_disagree($keyword);
		$data['a8_agree']=$this->feedbackmod->a8_agree($keyword);
		$data['a8_strongly_agree']=$this->feedbackmod->a8_strongly_agree($keyword);
		$data['a8_strongly_disagree']=$this->feedbackmod->a8_strongly_disagree($keyword);
		$data['a8_niether_agree_nor_disagree']=$this->feedbackmod->a8_niether_agree_nor_disagree($keyword);

        //ANSWER 9................................................................................................
		$data['a9_disagree']=$this->feedbackmod->a9_disagree($keyword);
		$data['a9_agree']=$this->feedbackmod->a9_agree($keyword);
		$data['a9_strongly_agree']=$this->feedbackmod->a9_strongly_agree($keyword);
		$data['a9_strongly_disagree']=$this->feedbackmod->a9_strongly_disagree($keyword);
		$data['a9_niether_agree_nor_disagree']=$this->feedbackmod->a9_niether_agree_nor_disagree($keyword);

		$data['results']=$this->showfeedbackmodel->get_all_list($keyword);

		$this->load->view('template/header');
        $this->load->view('template/topmenu');
        $this->load->view('template/sidemenu');
        $this->load->view('template/showfeedback',$data);
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