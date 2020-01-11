<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kate_model extends CI_Model {

	function selectAll(){
		$query = $this->db->get('tbl_kategori');
		return $query->result_array();
	}

	function selectProduk($id){
		$query = "select * from tbl_kategori where id='$id'";
		return $query->result_array();
	}

	public function insert_data($id){
		return $this->db->insert('tbl_kategori', $id);
	}

	public function delete_data($nm_tbl,$id)
	{
		$this->db->where('id',$id);
		$hapus = $this->db->delete($nm_tbl);
		return $hapus;
	}

	public function editData($nm_tbl,$data,$id)
	{
		$this->db->where('id', $id);
		$ganti = $this->db->update($nm_tbl, $data);
		return $ganti;
	}

	public function dataEdit($nm_tbl,$id)
	{
		$this->db->where('id',$id);
		$edit = $this->db->get($nm_tbl);
		return $edit->row();
	}
}