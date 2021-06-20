<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Record_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['judul'] = "Record In";
        $this->load->view("layout/header", $data);
        $this->load->view("record_in/vw_record_in", $data);
        $this->load->view("layout/footer");
    }
    function tambah(){
        $data['judul'] = "Record In Barang";
        $this->load->view("layout/header", $data);
        $this->load->view("record_in/vw_tambah_record_in", $data);
        $this->load->view("layout/footer");
    }
}