<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    public $table = 'produk';
    public $id = 'produk.id';
    
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->select('p.*,k.nama_kategori as kategori');
        $this->db->from('produk p');
        $this->db->join('kategori k', 'p.kategori = k.id');
        $this->db->where('p.id', $id);
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

    public function min_stok($stok, $idp)
    {
        $query = $this->db->set('stok', 'stok-' . $stok, false);
        $query = $this->db->where('id', $idp);
        $query = $this->db->update($this->table);
        return $query;
    }

    public function tproduk()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }

    
}
?>