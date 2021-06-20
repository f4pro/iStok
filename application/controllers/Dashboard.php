<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['judul'] = "Dashboard";
        $this->load->view("layout/header", $data);
        $this->load->view("dashboard/vw_dashboard");
        $this->load->view("layout/footer");
    }
}