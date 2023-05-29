<?php

class Login extends CI_Controller{
    public function LoginUser(){

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error', validation_errors());
            $this->load->view('login');
        }else{
            $this->load->model('LoginModel');
            $result=$this->LoginModel->getdata();

            if($result!=false){
                $userdata=array(
                    'user_id'=>$result->ID,
                    'admin_name'=>$result->username,
                    'loggedin'=>TRUE
                );
                $this->session->set_userdata($userdata);
                $this->session->set_flashdata('Welcomemsg','Welcome to Dashboard..!');
                redirect('Dashboard/createsession');

            }else{
                $this->session->set_flashdata('errormsg','Username or Password Incorrect.');
                redirect('Welcome/Login');
            }
        }
    }public function LogoutUser(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('loggedin');
        redirect('Welcome/Login');
    }
}
?>