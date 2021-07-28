<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class profil extends CI_Controller
{
    parent::__construct();
    $this->load->model()
public function buku(){
        $data['judul'] = "List Buku";
        $data['user'] = $this->user_model->getBy();
        $data['buku'] = $this->buku_model->get();
        $data['jlh'] = $this->keranjang_model->jumlah();
        $this->load->view('layout/header', $data);
        $this->load->view('user/vw_p_user', $data);
        $this->load->view('layout/footer', $data);
    }
}