<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Karyawan_model');
        $this->load->model('User_model');
        $this->load->model('Record_in_model');
        $this->load->model('Record_out_model');
    }
    function index()
    {
        $data['judul'] = "History";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user2'] = $this->User_model->getBy();
        $data['recin'] = $this->Record_in_model->getByUser();
        $data['recout'] = $this->Record_out_model->getByUser();
        $this->load->view("layout/header", $data);
        $this->load->view("history/history", $data);
        $this->load->view("layout/footer", $data);
    }
}