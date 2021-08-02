<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Support_model extends CI_Model
{
    public $table = 'support';
    public $id = 'support.id';

    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('s.*,u.nama as karyawan');
        $this->db->from('support s');
        $this->db->join('user u', 's.karyawan = u.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
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
    public function getByUser()
    {
        $id = $this->session->userdata('id');
        $this->db->select('s.*');
        $this->db->from('support s');
        $this->db->where('karyawan', $id);
        //$this->db->join('user u', 's.nama = u.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById2($id){
        $this->db->select('s.*,u.nama as karyawan');
        $this->db->from('support s');
        $this->db->join('user u', 's.nama = u.id');
        $this->db->where('s.id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function updatestatus($status, $noSup)
    {
        $this->db->set('status_support', $status);
        $this->db->where('id', $noSup);
        $this->db->update($this->table);
        return $this->db->affected_rows();
    }
}
