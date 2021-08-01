<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
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
    public function export()
    {
        $dompdf = new Dompdf();
        $this->data['all_jual'] = $this->Record_in_model->get();
        $this->data['title'] = "Laporan Data Penjualan";
        $this->data['no'] = 1;
        $dompdf->setPaper('A4', 'Landscape');
        $html = $this->load->view('record_in/report', $this->data, true);
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
    
}