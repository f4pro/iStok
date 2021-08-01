<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model');
    }
    function index()
    {
        $data['judul'] = "User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data2['user'] = $this->User_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("accounts/vw_acc", $data2);
        $this->load->view("layout/footer",$data);
    }
    
}