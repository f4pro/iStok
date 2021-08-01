<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Record_in_model extends CI_Model
{
    public $table = 'record_in';
    public $id = 'record_in.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('r.*,b.nama_barang as nama_barang, k.nama_karyawan as pemeriksa');
        $this->db->from('record_in r');
        $this->db->join('barang b','r.nama_barang = b.id');
        $this->db->join('karyawan k','r.pemeriksa = k.id');
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
        $this->db->select('r.*,b.nama_barang as nama_barang');
        $this->db->from('record_in r');
        $this->db->where('pemeriksa', $id);
        $this->db->join('barang b','r.nama_barang = b.id');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>