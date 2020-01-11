<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_detail extends CI_Model {

	function selectAll(){
		$query = $this->db->get('tbl_detail_order');
		return $query->result_array();

	}
}