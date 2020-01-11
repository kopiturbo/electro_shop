<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk_model extends CI_Model {

	function selectAll(){
		$query = $this->db->get('tbl_produk');
		return $query->result_array();
	}

	function selectProduk($id_produk){
		$query = "select * from tbl_produk where id_produk='$id_produk'";
		return $query->result_array();
	}

	public function insert_data($id){
		return $this->db->insert('tbl_produk', $id);
	}

	public function delete_data($nm_tbl,$id)
	{
		$this->db->where('id_produk',$id);
		$hapus = $this->db->delete($nm_tbl);
		return $hapus;		
	}

	public function editData($nm_tbl,$data,$id)
	{
		$this->db->where('id_produk', $id);
		$ganti = $this->db->update($nm_tbl, $data);
		return $ganti;
	}

	public function dataEdit($nm_tbl,$id)
	{
		$this->db->where('id_produk',$id);
		$edit = $this->db->get($nm_tbl);
		return $edit->row();
	}

}