<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('produk_model');
	}

	public function tampil_barang()
	{
		$data['tbl_produk'] = $this->produk_model->selectAll();
		$this->load->view('admin/static',$data);
		$this->load->view('barang/display_barang',$data);
	}

	public function tambah_barang()
	{
		$this->load->view('admin/static');
		$this->load->view('barang/add_barang');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/static');
			$this->load->view('barang/add_barang');
		}
		else
		{
			$nm_brg = $this->input->post('nama_produk');
			$deskripsi = $this->input->post('deskripsi');
			$harga = $this->input->post('harga');
			$gambar = $this->input->post('gambar');
			$kategori = $this->input->post('kategori');

			$object = array(
					'nama_produk' => $nm_brg,
					'deskripsi' => $deskripsi,
					'harga' => $harga,
					'gambar' => $gambar,
					'kategori' => $kategori
				);

			$query = $this->produk_model->insert_data($object);

			if ($query) {
				$this->session->set_flashdata('info', 'berhasil ditambahkan');
				redirect('produk/tampil_barang');
			}
		}
	}

	public function hapus_barang($id)
	{
		$hapus = $this->produk_model->delete_data('tbl_produk',$id);
		if ($hapus) {
				$this->session->set_flashdata('info', 'berhasil dihapus');
				redirect('produk/tampil_barang');
			}

	}

	public function edit_barang($id)
	{
		$this->load->view('admin/static');
		$this->data['dataEdit'] = $this->produk_model->dataEdit('tbl_produk',$id);
		$this->load->view('barang/edit_barang', $this->data);

	}

	public function update($id){
		$nama = $_POST['nama_produk'];
		$deskripsi = $_POST['deskripsi'];
		$harga = $_POST['harga'];
		$gambar = $_POST['gambar'];
		$kategori = $_POST['kategori'];

		$data = array('nama_produk' => $nama, 'deskripsi' => $deskripsi, 'harga' => $harga, 'gambar' => $gambar, 'kategori' => $kategori);
		$ubah = $this->produk_model->editData('tbl_produk', $data, $id);

		if ($ubah) {
			$this->session->set_flashdata('info', 'berhasil diubah');
			redirect('produk/tampil_barang');
		}else{
			$this->session->set_flashdata('info', 'gagal diubah');
			redirect('produk/tampil_barang');
		}
	}

}