<?php
class checkfeedback_model extends CI_Model{

    public function checkRow($sessionID,$serviceID) {
        $this->db->where('sessionID', $sessionID);
        $this->db->where('service_id', $serviceID);
        $query = $this->db->get('feedbacks');

        return $query->num_rows() > 0;
    }

}
?>