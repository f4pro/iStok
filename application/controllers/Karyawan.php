<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['judul'] = "Halaman Karyawan";
        $this->load->view("layout/header");
        $this->load->view("karyawan/vw_karyawan", $data);
        $this->load->view("layout/footer");
    }
    function tambah(){
        $data['judul'] = "Halaman Tambah Karyawan";
        $this->load->view("layout/header");
        $this->load->view("karyawan/vw_tambah_karyawan", $data);
        $this->load->view("layout/footer");
    }
}