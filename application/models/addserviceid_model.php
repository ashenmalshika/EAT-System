<?php
class addserviceid_model extends CI_Model{

    function addServiceId($section2){
        $image =$this->input->post('image_data');
        
        $data=[
            'sessionID'=>$section2,
            'service_id'=>$this->input->post('serviceid-input'),
            'employeephoto'=>$image
        ];
        return $this->db->insert('employee_attendance',$data);
    }

}
?>