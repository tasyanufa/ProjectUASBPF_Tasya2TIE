<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Kategori_model'); 
	}

	public function index()
	{
		$data['judul'] = "Halaman Kategori";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->Kategori_model->get();
		// var_dump($data['kategori']);
        $this->load->view("layout/header", $data);
        $this->load->view("kategori/vw_kategori", $data);
        $this->load->view("layout/footer");
	}

    public function tambah()
	{
		$data['judul'] = "Halaman Tambah Kategori";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->Kategori_model->get();
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', [
			'required' => 'Nama Kategori Wajib di isi'
		]);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
        	$this->load->view("layout/header", $data);
        	$this->load->view("kategori/vw_tambah_kategori", $data);
        	$this->load->view("layout/footer");
		}
		else{
			$data = [
				'nama_kategori' => $this->input->post('nama_kategori'),
				'keterangan' => $this->input->post('keterangan'),
			];
			$this->Kategori_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Kategori Berhasil Ditambah!</div>');
			redirect('Kategori');
		}
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Kategori";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->Kategori_model->getById($id);
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', [
			'required' => 'Nama Kategori Wajib di isi'
		]);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);
		if($this->form_validation->run()==false){
			$this->load->view("layout/header", $data);
			$this->load->view("kategori/vw_ubah_kategori", $data);
			$this->load->view("layout/footer");
		}
        else{
			$data = [
				'nama_kategori' => $this->input->post('nama_kategori'),
				'keterangan' => $this->input->post('keterangan'),
				'id' => $this->input->post('id'),
			];
			$this->Kategori_model->update($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Berhasil Diubah!</div>');
			redirect('Kategori');
		}
	}

	public function hapus($id){
		// $this->Kategori_model->delete($id);
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Berhasil Dihapus!</div>');
		// redirect('Kategori');
		$this->Kategori_model->delete($id);
		$error = $this->db->error();
 		if ($error['code'] != 0) {
 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon 
			fas fa-info-circle"></i>Data Kategori tidak dapat dihapus (sudah berelasi)!</div>');
 		}
		else {
 			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i 
			class="icon fas fa-check-circle"></i>Data Kategori Berhasil Dihapus!</div>');
 		}
		redirect('Kategori');
	}
}
?>