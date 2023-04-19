<?php

class feedbackform extends CI_Controller {

public function employee($sessionID,$serviceID){

    $this->form_validation->set_rules('question_1'  ,'Question 1','required');   
    $this->form_validation->set_rules('question_2'  ,'Question 2','required');    
    $this->form_validation->set_rules('question_3'  ,'Question 3','required'); 
    $this->form_validation->set_rules('question_4'  ,'Question 4','required'); 
    $this->form_validation->set_rules('question_5'  ,'Question 5','required');     
    $this->form_validation->set_rules('question_6'  ,'Question 6','required');
    $this->form_validation->set_rules('question_7'  ,'Question 7','required');    
    $this->form_validation->set_rules('question_8'  ,'Question 8','required');    
    $this->form_validation->set_rules('question_9'  ,'Question 9','required');    
    $this->form_validation->set_rules('question_10' ,'Question 10','required');          


    if ($this->form_validation->run() == FALSE){
        $this->load->view('feedbackform');
    } else{
        $this->load->model('feedback_model');
        $response = $this->feedback_model->insertUserdata($sessionID,$serviceID);
    }

    if ($response){ 
        redirect('Welcome/thankmsg');}
    else{
        $this->session->set_flashdata('msg','You missed Questions Answer All Question and Resubmit !! ');
        redirect('Welcome/feedbackform/'.$sessionID.'/'.$serviceID);
    }
}
}