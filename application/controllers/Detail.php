<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('m_detail');
	}

	public function tampil_detail()
	{
		$data['tbl_detail_order'] = $this->m_detail->selectAll();
		$this->load->view('admin/static',$data);
		$this->load->view('transaksi/display_detail',$data);
	}

}