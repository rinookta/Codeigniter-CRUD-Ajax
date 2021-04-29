<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbarang extends CI_Model {
	public function data(){
		$this->db->order_by('nama_barang','asc');
		return $this->db->get('barang');
	}
	public function tambah(){
		$d['id_barang']= random(8);		
		$d['nama_barang']= $this->input->post('nama_barang');
		$d['jenis_barang']= $this->input->post('jenis_barang');
		$d['stok_barang']= $this->input->post('stok_barang');
		$d['satuan_barang']= $this->input->post('satuan_barang');
		$d['tgl_barang']= date('Y-m-d');
		$this->db->insert('barang',$d);
	}
	public function edit(){
		$d['nama_barang']= $this->input->post('nama_barang');
		$d['jenis_barang']= $this->input->post('jenis_barang');
		$d['stok_barang']= $this->input->post('stok_barang');
		$d['satuan_barang']= $this->input->post('satuan_barang');
		$d['tgl_barang']= date('Y-m-d');
		$this->db->where('barang.id_barang',$this->input->post('id_barang'));
		$this->db->update('barang',$d);
	}
	public function detailbarang(){
		$this->db->where('barang.id_barang',$this->uri->segment(3));
		return $this->db->get('barang');
	}
	public function hapus(){
		$this->db->where('barang.id_barang',$this->uri->segment(3));
		$this->db->delete('barang');
	}
}