<?php
class showattendancemodel extends CI_Model{
	function __construct(){
		parent::__construct();
		// Load Database
		$this->load->database();
	}
	// Count Total List
	
	// Get all list
	function get_all_list($keyword){
         $this->db->select('*');
		 $this->db->like('SessionID',$keyword);
		return $this->db->get('employee_attendance')->result_array();
    }
}
	

?>