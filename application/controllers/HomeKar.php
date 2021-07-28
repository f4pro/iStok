<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeKar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
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

    function BarangMasuk($id){
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Buku";
        $data['user'] = $this->User_model->getBy();
        $data['buku'] = $this->Buku_model->getById($id);
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required', [
            'required' => 'Jumlah Wajib di isi '
        ]);
        if ( $this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('profil/vw_keranjang', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $data = [
                'id_user' => $this->session->userdata('id'),
                'id_buku' => $this->input->post('id'),
                'jumlah' => $this->input->post('jumlah'),
                'total' => $this->input->post('total'),
                'tanggal' => $this->input->post('tanggal'),
            ];
            $this->Keranjang_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Buku
             berhasil ditambah ke keranjang !!!</div>');
            redirect('Profil/detail');
        }
    }
}
