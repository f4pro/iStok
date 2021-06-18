<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Record_out extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['judul'] = "Halaman Record Out";
        $this->load->view("layout/header");
        $this->load->view("record_out/vw_record_out", $data);
        $this->load->view("layout/footer");
    }
    function tambah(){
        $data['judul'] = "Halaman Tambah Barang";
        $this->load->view("layout/header");
        $this->load->view("record_out/vw_tambah_record_out", $data);
        $this->load->view("layout/footer");
    }
}