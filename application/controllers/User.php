<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['judul'] = "Halaman User";
        $this->load->view("layout/header", $data);
        $this->load->view("user/vw_user", $data);
        $this->load->view("layout/footer");
    }
    function tambah(){
        $data['judul'] = "Halaman Tambah User";
        $this->load->view("layout/header", $data);
        $this->load->view("user/vw_tambah_user", $data);
        $this->load->view("layout/footer");
    }
}