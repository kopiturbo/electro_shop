<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
	 $this->load->model('m_login');

	}

	public function index()
	{
		if ($this->session->userdata('islogin')==TRUE) {
			redirect('admin');
		}else{
			$this->load->view('admin/login');
		}
	}

	function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->m_login->cek_user($username, $password);
			if(count($cek) == 1){
				$this->session->set_userdata(array(
					'islogin' => TRUE,
					'username' => $username,
				));

				redirect('admin');
			}else{
				$this->session->set_flashdata('gagallogin', 'username atau password salah');
				return redirect('login');
			}
	}
}
