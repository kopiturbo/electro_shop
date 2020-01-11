<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('kate_model');
	}

	public function tampil_kategori()
	{
		$data['tbl_kategori'] = $this->kate_model->selectAll();
		$this->load->view('admin/static',$data);
		$this->load->view('Kategori/display_kategori',$data);
	}

	public function tambah_kategori()
	{
		$this->load->view('admin/static');
		$this->load->view('kategori/add_kategori');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/static');
			$this->load->view('kategori/add_kategori');
		}
		else
		{
			$nm_kate = $this->input->post('nama_kategori');

			$object = array(
					'nama_kategori' => $nm_kate
				);

			$query = $this->kate_model->insert_data($object);

			if ($query) {
				$this->session->set_flashdata('info', 'berhasil ditambahkan');
				redirect('kategori/tampil_kategori');
			}
		}
	}

	public function hapus_kategori($id)
	{
		$hapus = $this->kate_model->delete_data('tbl_kategori',$id);
		if ($hapus) {
				$this->session->set_flashdata('info', 'berhasil dihapus');
				redirect('kategori/tampil_kategori');
			}
	}

	public function edit_kategori($id)
	{
		$this->load->view('admin/static');
		$this->data['dataEdit'] = $this->kate_model->dataEdit('tbl_kategori',$id);
		$this->load->view('kategori/edit_kategori', $this->data);

	}

	public function update($id){
		$nama = $_POST['nama_kategori'];

		$data = array('nama_kategori' => $nama);
		$ubah = $this->kate_model->editData('tbl_kategori', $data, $id);

		if ($ubah) {
			$this->session->set_flashdata('info', 'berhasil diubah');
			redirect('kategori/tampil_kategori');
		}else{
			$this->session->set_flashdata('info', 'gagal diubah');
			redirect('kategori/tampil_kategori');
		}
	}

}