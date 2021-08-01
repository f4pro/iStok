<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model');
        $this->load->model('Akun_model');
    }
    function index()
    {
        $data['judul'] = "User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['akun'] = $this->Akun_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("accounts/vw_acc", $data);
        $this->load->view("layout/footer",$data);
    }
    function edit($id)
    {
        $data['judul'] = "User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['akun'] = $this->Akun_model->getById($id);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("accounts/vw_edit_acc", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'email' => $this->input->post('email'),
                'status' => $this->input->post('status'),
            ];
            $id = $this->input->post('id');
            $this->Akun_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil DiUbah!</div>');
            redirect('Account');
        }
    }
}