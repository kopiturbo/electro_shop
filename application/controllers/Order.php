<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('m_order');
	}

	public function tampil_order()
	{
		$data['tbl_order'] = $this->m_order->selectAll();
		$this->load->view('admin/static',$data);
		$this->load->view('transaksi/display_order',$data);
	}

}