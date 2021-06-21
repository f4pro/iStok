<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Record_out extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Record_out_model');
    }
    function index()
    {
        $data['judul'] = "Record Out";
        $data['record_out'] = $this->Record_out_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("record_out/vw_record_out", $data);
        $this->load->view("layout/footer");
    }
    function tambah(){
        $data['judul'] = "Record Out Barang";
        $this->load->view("layout/header", $data);
        $this->load->view("record_out/vw_tambah_record_out", $data);
        $this->load->view("layout/footer");
    }
}