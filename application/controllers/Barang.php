<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mbarang');

		include APPPATH.'views/function.php';
	}
	public function tambah(){
		$this->Mbarang->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/barang'));
	}
	public function edit(){
		$this->Mbarang->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/barang'));
	}
	public function hapus(){
		$this->Mbarang->hapus();
		$this->session->set_flashdata('msg','hapus');
		echo "oke";
	}
}