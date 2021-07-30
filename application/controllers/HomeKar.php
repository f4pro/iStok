<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeKar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->model('User_model');
        $this->load->model('Record_in_model');
    }
    public function index()
    {
        $data['judul'] = "List Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Barang_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('profil/barang_karyawan', $data);
        $this->load->view('layout/footer', $data);
    }

    function BarangMasukKar($id){
        $data['judul'] = "Barang Masuk";
        $data['barang'] = $this->Barang_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("check_in/userBarang_tambah", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'stok' => $this->input->post('StokHitungM')
            ];
            $data2 = [
                'tanggal_masuk' => date('Y-m-d'),
                'nama_barang' => $this->Barang_model->getById($id),
                'stok' => $this->input->post('StokHitungM'),
                'pemeriksa' => $this->session->userdata('id')
            ];
            $id = $this->input->post('id');
            $this->Barang_model->update(['id' => $id], $data);
            $this->Record_in_model->insert($data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil DiUbah!</div>');
            redirect('Barang');
        }
    }
}
