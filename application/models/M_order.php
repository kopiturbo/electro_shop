<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_order extends CI_Model {

	function selectAll(){
		$query = $this->db->get('tbl_order');
		return $query->result_array();

	}
}