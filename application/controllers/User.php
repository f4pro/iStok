<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    function index()
    {
        $data['judul'] = "Halaman User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->User_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("user/vw_user", $data);
        $this->load->view("layout/footer", $data);
    }
    function tambah(){
        $data['judul'] = "Halaman Tambah User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("user/vw_tambah_user", $data);
        $this->load->view("layout/footer",$data);
    }
}