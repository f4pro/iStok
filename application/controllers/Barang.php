<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['judul'] = "Halaman Barang";
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_barang", $data);
        $this->load->view("layout/footer");
    }
    function tambah(){
        $data['judul'] = "Halaman Tambah Barang";
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_tambah_barang", $data);
        $this->load->view("layout/footer");
    }
}