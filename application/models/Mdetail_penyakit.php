<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Mdetail_pengetahuan extends CI_Model 
{
	
	public function tampil($id_pengetahuan)
	{
		$this->db->join('pengetahuan', 'detail_pengetahuan.id_pengetahuan = pengetahuan.id_pengetahuan');
		$this->db->where('detail_pengetahuan.id_pengetahuan', $id_pengetahuan);
		$ambil = $this->db->get('detail_pengetahuan');
		$data = $ambil->result_array();
		return $data;
	}

	public function tambah($inputan)
	{
		$this->db->insert('detail_pengetahuan', $inputan);
	}

	public function detail($id_detail_pengetahuan)
	{
		$this->db->join('pengetahuan', 'detail_pengetahuan.id_pengetahuan = pengetahuan.id_pengetahuan');
		$this->db->where('id_detail_pengetahuan', $id_detail_pengetahuan);
		$ambil = $this->db->get('detail_pengetahuan');
		$data = $ambil->row_array();
		return $data;
	}

	public function ubah($inputan, $id_detail_pengetahuan)
	{
		$this->db->where('id_detail_pengetahuan', $id_detail_pengetahuan);
		$this->db->update('detail_pengetahuan', $inputan);
	}

	public function hapus($id_detail_pengetahuan)
	{
		$this->db->where('id_detail_pengetahuan', $id_detail_pengetahuan);
		$this->db->delete('detail_pengetahuan');
	}
}



 ?>