<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Record_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Record_in_model');
    }
    function index()
    {
        $data['judul'] = "Record In";
        $data['record_in'] = $this->Record_in_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("record_in/vw_record_in", $data);
        $this->load->view("layout/footer");
    }
    function tambah(){
        $data['judul'] = "Record In Barang";
        $this->load->view("layout/header", $data);
        $this->load->view("record_in/vw_tambah_record_in", $data);
        $this->load->view("layout/footer", $data);
    }
    function hapus($id)
    {
        $this->Barang_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil Dihapus!</div>');
        redirect('Barang');
    }
    function edit($id){
        $data['judul'] = "Halaman Edit Mahasiswa";
        $data['karyawan'] = $this->Karyawan_model->getById($id);

        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required', ['required' => 'Nama Karyawan Wajib diisi',]);
        $this->form_validation->set_rules('NIK', 'NIK Karyawan', 'required|numeric', ['required' => 'NIK Karyawan Wajib diisi',
                                          'numeric' => 'NIK Karyawan harus angka']);
        $this->form_validation->set_rules('alamat', 'Alamat Karyawan', 'required', ['required' => 'Alamat Karyawan Wajib diisi',]);
        $this->form_validation->set_rules('notelp', 'No Telpon', 'required|numeric', ['required' => 'No Telpon Wajib diisi',
                                          'numeric' => 'No Telpon harus angka']);
        $this->form_validation->set_rules('usia', 'Usia Karyawan', 'required|numeric', ['required' => 'Usia Karyawan Wajib diisi',
                                          'numeric' => 'Usia Karyawan harus angka']);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("karyawan/vw_edit_karyawan", $data);
            $this->load->view("layout/footer", $data);

        } else {
            $data = [
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'NIK' => $this->input->post('NIK'),
                'alamat' => $this->input->post('alamat'),
                'notelp' => $this->input->post('notelp'),
                'usia' => $this->input->post('usia'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/karyawan/';
                $this->load->library('upload', $config);

              if ($this->upload->do_upload('gambar')) {

                    $new_image = $this->upload->data('file_name');
                    $query = $this->db->set('gambar', $new_image);

                    if ($query) {
                        $old_image = $this->db->get_where('karyawan', ['id' => $id])->row();
                        unlink(FCPATH . 'assets/karyawan/' . $old_image->gambar);
                    }
                    
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Karyawan_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Karyawan Berhasil DiUbah!</div>');
            redirect('Karyawan');
        }
    }
}