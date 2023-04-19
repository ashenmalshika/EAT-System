<?php
class addserviceid_model extends CI_Model{

    function addServiceId($section2){
        $data=[
            'sessionID'=>$section2,
            'service_id'=>$this->input->post('serviceid-input')
        ];
        return $this->db->insert('employee_attendance',$data);
    }

}
?>