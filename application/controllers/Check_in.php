<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Check_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Barang_model');
        $this->load->model('Record_in_model');
        $this->load->model('Karyawan_model');
    }
    function index()
    {
        $data['judul'] = "Penambahan Barang Baru";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|trim|is_unique[barang.nama_barang]', [
            'required' => 'Nama Barang Wajib diisi',
            'is_unique' => 'Barang sudah ada, silahkan ke List Barang']);
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required', ['required' => 'Jenis Barang Wajib diisi',]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'required' => 'Stok Wajib diisi',
            'numeric' => 'Stok harus angka'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("check_in/form_barang", $data);
            $this->load->view("layout/footer", $data);
        } else {
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
            redirect('HomeKar');
        }
    }
}
