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
    public function getById($id)
    {
        $this->db->select('barang.* , prodi.nama as prodi');
        $this->db->from('mahasiswa');
        $this->db->join('prodi','mahasiswa.prodi = prodi.id');
        $this->db->where('mahasiswa.id', $id);
        $query = $this->db->get();
        return $query->row_array();
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
}
?>