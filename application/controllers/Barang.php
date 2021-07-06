<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Barang";
        $data['barang'] = $this->Barang_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_barang", $data);
        $this->load->view("layout/footer");
    }
    function tambah(){
        $data['judul'] = "Halaman Tambah Barang";
       
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', ['required' => 'Nama Barang Wajib diisi',]);
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required', ['required' => 'Jenis Barang Wajib diisi',]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', ['required' => 'Stok Wajib diisi',
                                          'numeric' => 'Stok harus angka']);

        if($this->form_validation->run() == false){
            $this->load->view("layout/header", $data);
            $this->load->view("barang/vw_tambah_barang", $data);
            $this->load->view("layout/footer", $data);

        }else{
            $data = [
                'nama_barang' => $this->input->post('nama_barang'),
                'jenis_barang' => $this->input->post('jenis_barang'),
                'stok' => $this->input->post('stok'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/barang/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Barang_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil Ditambah!</div>');
            redirect('Barang');
        }
    }
    function hapus($id)
    {
        $this->Barang_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil Dihapus!</div>');
        redirect('Barang');
    }
    function edit($id){
        $data['judul'] = "Halaman Edit Mahasiswa";
        $data['barang'] = $this->Barang_model->getById($id);

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', ['required' => 'Nama Barang Wajib diisi',]);
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required', ['required' => 'Jenis Barang Wajib diisi',]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', ['required' => 'Stok Wajib diisi',
                                          'numeric' => 'Stok harus angka']);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("barang/vw_edit_barang", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_barang' => $this->input->post('nama_barang'),
                'jenis_barang' => $this->input->post('jenis_barang'),
                'stok' => $this->input->post('stok'),
            ];
            $this->Barang_model->update($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil DiUbah!</div>');
            redirect('Barang');
        }
    }
}