<?php
class showattendancemodel extends CI_Model{
	
	
	// Get all list
	function get_all_list($keyword){
		 $this->load->database();
         $this->db->select('*');
		 $this->db->like('SessionID',$keyword);
		return $this->db->get('employee_attendance')->result_array();
    }
}
	

?>