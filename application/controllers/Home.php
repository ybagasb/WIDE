<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $this->load->model('komentar_model','komentar');
        $data['list_komentar'] = $this->komentar->getall();

        $this->load->view('struktur/header');
        $this->load->view('home/index',$data);
    }

    public function detail(){
        $this->load->model('komentar_model','komentar');
        $data['list_komentar'] = $this->komentar->getall();

        $this->load->view('struktur/header');
        $this->load->view('home/detail',$data);
    }

    public function contactUs(){
        $this->load->view('struktur/header');
        $this->load->view('home/contact-us');
    }
    public function ourServices(){
        $this->load->view('struktur/header');
        $this->load->view('home/our-services');
    }
}