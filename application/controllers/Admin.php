<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
	// $this->load->model('m_aksesoris');
		$this->load->model('m_login');

	}

	public function index()
	{
		if ($this->session->userdata('islogin')== TRUE) {
			
			$data['user'] = $this->m_login->cek_user();
			$this->load->view('admin/static',$data);
			$this->load->view('admin/dashboard',$data);
		}else{
			redirect('login');
		}
	}
}
