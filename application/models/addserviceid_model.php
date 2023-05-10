<?php
class addserviceid_model extends CI_Model{

    public function checkRow($section2, $serviceID) {
        $this->db->where('sessionID', $section2);
        $this->db->where('service_id', $serviceID);
        $query = $this->db->get('employee_attendance');

        return $query->num_rows() > 0;
    }

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