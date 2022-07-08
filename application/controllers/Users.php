<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function index(){
        $this->load->model('users_model','users');
        $list_users = $this->users->getAll();

        $data['list_users'] = $list_users;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/index',$data);
        $this->load->view('layout/footer');
    }
}