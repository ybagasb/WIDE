<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {
  public function index()
    {
        $this->load->model('wisata_model', 'wisata');
        $list_wisata = $this->wisata->getAll();
        $data['list_wisata'] = $list_wisata;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('wisata/index', $data);
        $this->load->view('layout/footer');
    }
  
    public function view(){
      $_id = $this->input->get('id');
      $this->load->model('wisata_model', 'wisata');
      $data['wisata'] = $this->wisata->findById($_id);
      
      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('wisata/view',$data);
      $this->load->view('layout/footer');
  }

  public function create(){
    $data['judul']='Form Kelola Wisata';
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('wisata/create',$data);
    $this->load->view('layout/footer');
}

public function save(){
    $this->load->model('wisata_model','wisata');

    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $latlong = $this->input->post('latlong');
    $jenis_id = $this->input->post('jenis_id');
    $skor_rating = $this->input->post('skor_rating');
    $harga_tiket = $this->input->post('harga_tiket');
    $foto1 = $this->input->post('foto1');
    $foto2 = $this->input->post('foto2');
    $foto3 = $this->input->post('foto3');
    $kecamatan_id = $this->input->post('kecamatan_id');
    $website = $this->input->post('website');
    $fasilitas = $this->input->post('fasilitas');

    $data_wisata[]=$nama;
    $data_wisata[]=$alamat;
    $data_wisata[]=$latlong;
    $data_wisata[]=$jenis_id;
    $data_wisata[]=$skor_rating;
    $data_wisata[]=$harga_tiket;
    $data_wisata[]=$foto1;
    $data_wisata[]=$foto2;
    $data_wisata[]=$foto3;
    $data_wisata[]=$kecamatan_id;
    $data_wisata[]=$website;
    $data_wisata[]=$fasilitas;
    
    // if(isset($idedit)){
    //     $data_wisata[]=$idedit;
    //     $this->wisata->update($data_wisata);
    // }else{
    //     $this->wisata->save($data_wisata);
    // }

    $id = $this->wisata->save($data_wisata);

    redirect(base_url().'index.php/wisata/view?id='.$id, 'refresh');
}

public function edit(){
    $id = $this->input->get('id');
    $this->load->model("wisata_model","wisata");
    $wisataedit = $this->wisata->findById($id);

    $data['judul']='Form Kelola wisata';
    $data['wisataedit']=$wisataedit;
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('wisata/update',$data);
    $this->load->view('layout/footer');

}

public function delete(){
    $id = $this->input->get('id');
    $this->load->model("wisata_model","wisata");
    $this->wisata->delete($id);
    redirect(base_url().'index.php/wisata/index', 'refresh');
}

public function upload(){
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'jpg|png';
    $config['max_size']             = 500;
    $config['max_width']            = 1024;
    $config['max_height']           = 1000;

    $id = $this->input->post('id');

    $array = explode('.', $_FILES['fotowst']['name']);
    $extension = end($array);

    //die(print_r($_FILES));
    $new_name = $id.'.'.$extension;
    //die($new_name);
    $config['file_name'] = $new_name;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('fotowst'))
    {
        $error = array('error' => $this->upload->display_errors());
        die(print_r($error));
        $this->load->view('upload_form', $error);
        }
    else
    {
        //panggil model
        $this->load->model("wisata_model","wisata");
        $array_data[]= $new_name; //? ke 1
        $array_data[]= $id; //? ke 2
        //update foto ditabel mahasiswa
        $this->wisata->update_foto($array_data);

        $data = array('upload_data' => $this->upload->data());
        //$this->load->view('upload_success', $data);
    }
    redirect(base_url().'index.php/wisata/view?id='.$id);
}
}