<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model'); 
	}

	public function index()
	{
		$data['judul'] = "Halaman Pelanggan";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = $this->User_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("pelanggan/vw_pelanggan", $data);
        $this->load->view("layout/footer");
	}

	// public function detail($id)
	// {
	// 	$data['judul'] = "Halaman Detail Pelanggan";
	// 	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	// 	$data['pelanggan'] = $this->Pelanggan_model->getById($id);
    //     $this->load->view("layout/header", $data);
    //     $this->load->view("pelanggan/vw_detail_pelanggan", $data);
    //     $this->load->view("layout/footer");
	// }

	public function hapus($id){
		$this->User_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Dihapus!</div>');
		redirect('Pelanggan');
	}
}
?>