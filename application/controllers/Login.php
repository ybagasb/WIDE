<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        $data = [] ;
        $this->load->view('login',$data);
    }

    public function autentikasi(){
        $this->load->model("users_model","users");
        $_username = $this->input->post('username');
        $_password= $this->input->post('password');

        $row = $this->users->login($_username,$_password) ;
        if(isset($row)) { // jika user terdaftar di database
            $this->session->set_userdata('USERNAME', $row->username) ;
            $this->session->set_userdata('ROLE', $row->role) ;
            $this->session->set_userdata('USER', $row) ;

            redirect(base_url().'index.php/dashboard') ;
        }else{ // jika username atau password salah
            redirect(base_url().'index.php/login?status=f') ;
        }

    }

    public function logout(){
        $this->session->unset_userdata(array(
            'USERNAME',
            'ROLE',
            'USER'
        ));
        redirect(base_url().'index.php/login') ;
    }

    public function user_logout(){
        $this->logout() ;
        redirect(base_url().'index.php/login') ;
    }
}