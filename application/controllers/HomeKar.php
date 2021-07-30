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
        $this->load->model('Record_out_model');
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

    function BarangMasukKar($id)
    {
        $data['judul'] = "Barang Masuk";
        $data['barang'] = $this->Barang_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('StokMasuk', 'Stok Masuk', 'required|numeric', [
            'required' => 'Nominal masuk wajib diisi',
            'numeric' => 'Input harus angka!' ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("check_in/userBarang_tambah", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'stok' => $this->input->post('total')
            ];
            $id = $this->input->post('id');
            $this->Barang_model->update(['id' => $id], $data);
            $data2 = [
                'tanggal_masuk' => date('Y-m-d'),
                'nama_barang' => $id,
                'stok' => $this->input->post('StokMasuk'),
                'pemeriksa' => $this->session->userdata('id')
            ];
            $this->Record_in_model->insert($data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Barang berhasil ditambah!</div>');
            redirect('HomeKar/');
        }
    }
    function BarangKeluarKar($id)
    {
        $data['judul'] = "Barang Keluar";
        $data['barang'] = $this->Barang_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('StokKeluar', 'Stok Keluar', 'required|numeric', [
            'required' => 'Nominal masuk wajib diisi',
            'numeric' => 'Input harus angka!' ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("check_out/userBarang_kurang", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'stok' => $this->input->post('total')
            ];
            $id = $this->input->post('id');
            $this->Barang_model->update(['id' => $id], $data);
            $data2 = [
                'tanggal_keluar' => date('Y-m-d'),
                'barang' => $id,
                'stok' => $this->input->post('StokKeluar'),
                'pekerja' => $this->session->userdata('id')
            ];
            $this->Record_out_model->insert($data2);
            $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Barang berhasil dicatat! Mohon <b>periksa</b> barang sebelum Sign Out </div>');
            redirect('HomeKar/');
        }
    }
}
