<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model');
    }
    function index()
    {
        $data['judul'] = "Karyawan";
        $data['karyawan'] = $this->Karyawan_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("karyawan/vw_karyawan", $data);
        $this->load->view("layout/footer");
    }
    function tambah(){
        $data['judul'] = "Penambahan Karyawan";
        $this->load->view("layout/header", $data);
        $this->load->view("karyawan/vw_tambah_karyawan", $data);
        $this->load->view("layout/footer");
    }
}