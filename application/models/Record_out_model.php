<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Record_out_model extends CI_Model
{
    public $table = 'record_out';
    public $id = 'record_out.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('r.*,b.nama_barang as barang, k.nama_karyawan as pekerja');
        $this->db->from('record_out r');
        $this->db->join('barang b','r.barang = b.id');
        $this->db->join('karyawan k','r.pekerja = k.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function getByUser()
    {
        $id = $this->session->userdata('id');
        $this->db->select('r.*,b.nama_barang as barang');
        $this->db->from('record_out r');
        $this->db->where('pekerja', $id);
        $this->db->join('barang b','r.barang = b.id');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>