<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('kons_model');
	}

	public function tampil_konsumen()
	{
		$data['tbl_pelanggan'] = $this->kons_model->selectAll();
		$this->load->view('admin/static',$data);
		$this->load->view('konsumen/display_pelanggan',$data);
	}

	public function tambah_konsumen()
	{
		$this->load->view('admin/static');
		$this->load->view('konsumen/add_konsumen');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/static');
			$this->load->view('konsumen/add_konsumen');
		}
		else
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$telp = $this->input->post('telp');

			$object = array(
					'nama' => $nama,
					'email' => $email,
					'alamat' => $alamat,
					'telp' => $telp
				);

			$query = $this->kons_model->insert_data($object);

			if ($query) {
				$this->session->set_flashdata('info', 'berhasil ditambahkan');
				redirect('konsumen/tampil_konsumen');
			}
		}
	}

	public function hapus_konsumen($id)
	{
		$hapus = $this->kons_model->delete_data('tbl_pelanggan',$id);
		if ($hapus) {
				$this->session->set_flashdata('info', 'berhasil dihapus');
				redirect('konsumen/tampil_konsumen');
			}
	}

	public function edit_konsumen($id)
	{
		$this->load->view('admin/static');
		$this->data['dataEdit'] = $this->kons_model->dataEdit('tbl_pelanggan',$id);
		$this->load->view('konsumen/edit_konsumen', $this->data);

	}

	public function update($id){
		$nama = $_POST['nama_kons'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['telp'];

		$data = array('nama' => $nama, 'email' => $email, 'alamat' => $alamat, 'telp' => $telp);
		$ubah = $this->kons_model->editData('tbl_pelanggan', $data, $id);

		if ($ubah) {
			$this->session->set_flashdata('info', 'berhasil diubah');
			redirect('konsumen/tampil_konsumen');
		}else{
			$this->session->set_flashdata('info', 'gagal diubah');
			redirect('konsumen/tampil_konsumen');
		}
	}

}