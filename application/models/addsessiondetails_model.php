<?php
class addsessiondetails_model extends CI_Model{

    function adddetails(){
        $SessionID = date("His") . mt_rand(11,99);
        $link = "http://localhost/codeigniter/markattendance/" .$SessionID; 
        // Load the QR code library
        $this->load->library('ciqrcode');

        // Generate a QR code
        $params['data'] = $link; 
        $params['size'] = 300;
        $params['savename'] = FCPATH . 'assets/images/'.$SessionID.'.png'; //qr image savepath
        $this->ciqrcode->generate($params);

        $data=[
            'sessionName'=>$this->input->post('sessionname'),
            'sessionDate'=>$this->input->post('sessiondate'),
            'sessionTime'=>$this->input->post('sessionTime'),
            'lecturerName'=>$this->input->post('lecturername'),
            'SessionID'=>$SessionID
        ];
        return $this->db->insert('sessionstable',$data);
    }

    function getsessiondetails(){
        $query=$this->db->get('sessionstable');
        return $query->result();
    }
    function getpastsessiondetails(){
        $query=$this->db->get('deletedsessions');
        return $query->result();
    }
}
?>