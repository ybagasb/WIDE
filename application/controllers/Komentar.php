<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {
    public function index(){
        $this->load->model('komentar_model','komentar');
        $data['list_komentar']=$this->komentar->getall();
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('komentar_model', 'komentar');
        $data['kmntr'] = $this->komentar->findById($_id);
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola Komentar';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('komentar_model','komentar');
        
        $tanggal = $this->input->post('tanggal');
        $isi = $this->input->post('isi');
        $users_id = $this->input->post('users_id');
        $wisata_id = $this->input->post('wisata_id');
        $nilai_rating_id = $this->input->post('nilai_rating_id');

        $data_kmntr[]=$tanggal;
        $data_kmntr[]=$isi;
        $data_kmntr[]=$users_id;
        $data_kmntr[]=$wisata_id;
        $data_kmntr[]=$nilai_rating_id;
        
        if(isset($idedit)){
            $data_kmntr[]=$idedit;
            $this->komentar->update($data_kmntr);
        }else{
            $this->komentar->save($data_kmntr);
        }

        $id = $this->komentar->save($data_kmntr);

        redirect(base_url().'index.php/home/index', 'refresh');
    }

    public function edit(){
        $id = $this->input->get('id');
        $this->load->model("komentar_model","komentar");
        $kmntredit = $this->komentar->findById($id);

        $data['judul']='Form Kelola komentar';
        $data['kmntredit']=$kmntredit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/update',$data);
        $this->load->view('layout/footer');

    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model("komentar_model","komentar");
        $this->komentar->delete($id);
        redirect(base_url().'index.php/komentar/index', 'refresh');
    }

    
}