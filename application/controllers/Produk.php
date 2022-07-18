<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Produk_model'); 
		$this->load->model('Kategori_model');
	}

	public function index()
	{
		$data['judul'] = "Halaman Produk";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Produk_model->get(); 
        $this->load->view("layout/header", $data);
        $this->load->view("produk/vw_produk", $data);
        $this->load->view("layout/footer");
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Tambah Produk";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->Kategori_model->get();
		$this->form_validation->set_rules('nama', 'Nama Barang', 'required', [
			'required' => 'Nama Barang Wajib di isi'
		]);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required', [
			'required' => 'Kategori Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
			'required' => 'Harga Wajib di isi',
			'integer' => 'Harga harus Angka'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
			'required' => 'Stok Wajib di isi',
			'integer' => 'Stok harus Angka'
		]);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
        	$this->load->view("layout/header", $data);
        	$this->load->view("produk/vw_tambah_produk", $data);
        	$this->load->view("layout/footer");
		}
		else{
			$data = [
				'nama' => $this->input->post('nama'),
				'kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'keterangan' => $this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets4/images/produk/';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
				else{
					echo $this->upload->display_errors();
				}
			}
			$this->Produk_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Produk Berhasil Ditambah!</div>');
			redirect('Produk');
		}
	}

	// function getList() {
	// 	$request=$_POST['request'];
    //     $query = $this->db->query("SELECT pd.*, kt.*
    //     FROM produk pd join kategori kt 
    //     where pd.kategori = kt.id ='$request'")->result_array();
	// 	echo json_encode($query);
	// }



	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Produk";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->Kategori_model->get();
		$data['produk'] = $this->Produk_model->getById($id);
		$this->form_validation->set_rules('nama', 'Nama Barang', 'required', [
			'required' => 'Nama Barang Wajib di isi'
		]);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required', [
			'required' => 'Kategori Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
			'required' => 'Harga Wajib di isi',
			'integer' => 'Harga harus Angka'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
			'required' => 'Stok Wajib di isi',
			'integer' => 'Stok harus Angka'
		]);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);
		if($this->form_validation->run()==false){
			$this->load->view("layout/header", $data);
			$this->load->view("produk/vw_ubah_produk", $data);
			$this->load->view("layout/footer");
		}
        else{
			$data = [
				'nama' => $this->input->post('nama'),
				'kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'keterangan' => $this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets4/images/produk/';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')) {
					$old_image = $data['produk']['gambar'];
					if($old_image != 'default.jpg') {
						unlink(FCPATH.'assets4/images/produk/'.$old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
				else{
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Produk_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Diubah!</div>');
			redirect('Produk');
		}
	}

	// public function detail($id)
	// {
	// 	$data['judul'] = "Halaman Detail Mahasiswa";
	// 	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	// 	$data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    //     $this->load->view("layout/header", $data);
    //     $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
    //     $this->load->view("layout/footer");
	// }

	public function hapus($id){
		$this->Produk_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Dihapus!</div>');
		redirect('Produk');
	}
}