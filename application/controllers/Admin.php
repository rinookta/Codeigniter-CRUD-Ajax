<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('Mbarang');

		include APPPATH.'views/function.php';
	}
	public function index(){
		$d['barang']= $this->Mbarang->data();
		$this->template->admin('admin/barang/data',$d);
	}
//barang
	public function barang(){
		$d['barang']= $this->Mbarang->data();
		$this->template->admin('admin/barang/data',$d);
	}
	public function tambahbarang(){
		include APPPATH.'views/admin/barang/tambah.php';
	}
	public function editbarang(){
		$barang= $this->Mbarang->detailbarang();
		include APPPATH.'views/admin/barang/edit.php';
	}		
}
