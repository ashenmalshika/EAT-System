<?php
class user_model extends CI_Model{

    function getdata(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $encrypt = sha1($password);

        $this->db->where('username',$username);
        $this->db->where('password',$encrypt);

        $respond=$this->db->get('admintable');                               //check in users table
        if($respond->num_rows()==1){
            return $respond->row(0);
        }else{
            return false;
        }
    }

}
?>