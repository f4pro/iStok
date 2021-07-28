<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Check_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Penambahan Barang";
        $data['check_in'] = $this->Barang_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("check_in/form_barang", $data);
        $this->load->view("layout/footer");
    }
}