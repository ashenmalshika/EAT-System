<?php

class FeedbackModel extends CI_Model{

    function insertUserdata($sessionID,$serviceID){

        $data = array(
            'SessionID'=> $sessionID,
            'service_id'=> $serviceID,
            'question_1'=> $this->input-> post   ('question_1'),
            'question_2'=> $this->input-> post   ('question_2'),
            'question_3'=> $this->input-> post   ('question_3'),
            'question_4'=> $this->input-> post   ('question_4'),
            'question_5'=> $this->input-> post   ('question_5'),
            'question_6'=> $this->input-> post   ('question_6'),
            'question_7'=> $this->input-> post   ('question_7'),
            'question_8'=> $this->input-> post   ('question_8'),
            'question_9'=> $this->input-> post   ('question_9'),
            'question_10'=> $this->input-> post   ('question_10')
         );

         return $this->db->insert ('feedbacks',$data);
    }
}