<?php
class ShowAttendanceModel extends CI_Model{
	
	// Get all list
	function get_all_list($keyword){
		$this->load->database();
        $this->db->like('SessionID', $keyword);
		 $query = $this->db->get('employee_attendance');
		 return $data['attendance_results'] = $query;
    }
}
	

?>