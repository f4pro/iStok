<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Dompdf\Dompdf;
class Record_out extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Record_out_model');
    }
    function index()
    {
        $data['judul'] = "Record Out";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['record_out'] = $this->Record_out_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("record_out/vw_record_out", $data);
        $this->load->view("layout/footer", $data);
    }
    public function export()
    {
        $dompdf = new Dompdf();
        $this->data['all_jual'] = $this->Record_out_model->get();
        $this->data['title'] = "Laporan Data Penjualan";
        $this->data['no'] = 1;
        $dompdf->setPaper('A4', 'Landscape');
        $html = $this->load->view('record_out/report', $this->data, true);
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}