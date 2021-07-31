<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Record_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Record_in_model');
    }
    function index()
    {
        $data['judul'] = "Record In";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['record_in'] = $this->Record_in_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("record_in/vw_record_in", $data);
        $this->load->view("layout/footer", $data);
    }
    
}