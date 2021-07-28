<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Check_out extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }
public function barang(){
        $data['judul'] = "List Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Barang_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('check_out/vw_barang', $data);
        $this->load->view('layout/footer', $data);
    }
}