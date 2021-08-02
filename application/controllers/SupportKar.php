<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SupportKar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Support_model');
        $this->load->model('User_model');
        $this->load->model('Karyawan_model');

    }
    function index()
    {
        $data['judul'] = "Halaman Laporan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['support'] = $this->Support_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("lapor/vw_supportKar", $data);
        $this->load->view("layout/footer", $data);
    }
    function edit($id)
    {
        $data['judul'] = "Detail Laporan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan']= $this->Karyawan_model->get();
        $data['support'] = $this->Support_model->getById($id);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("lapor/vw_edit_support", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'status_support' => $this->input->post('status_support'),
                'description_feed' => $this->input->post('description_feed')
            ];
            $id = $this->input->post('id');
            $this->Support_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Support berhasil diupdate</div>');
            redirect('Support');
        }
    }
    function tambahSupportKar()
    {
        $data['judul'] = "Form Laporan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$data['karyawan']= $this->Karyawan_model->get();
        //$data['support'] = $this->Support_model->getById($id);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("lapor/vw_tambah_support", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'rate' => $this->input->post('rate'),
                'karyawan' => $this->session->userdata('id'),
                'jenis_support' => $this->input->post('jenis_support'),
                'description' => $this->input->post('description')
            ];
            $this->Support_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Support berhasil diupdate</div>');
            redirect('SupportKar');
        }
    }
    function hapus($id)
    {
        $this->Barang_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil Dihapus!</div>');
        redirect('Support');
    }
}
