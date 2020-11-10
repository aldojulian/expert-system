<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Martikel extends CI_Model
{
	
	public function tampil()
	{

		$ambil = $this->db->get("artikel");

		return $ambil->result_array();
	}
	public function simpan($inputan)
	{
		$this->db->insert('artikel', $inputan);
	}

	public function tambah($inputan)
	{
		$this->db->insert('artikel', $inputan);
	}

	public function detail($id_artikel)
	{
		$this->db->where('id_artikel', $id_artikel);
		$ambil = $this->db->get('artikel');
		return $ambil->row_array();
	}

		public function hapus($id_artikel)
	{
		$this->db->where('id_artikel', $id_artikel);
		$this->db->delete('artikel');
	}

		public function ubah($inputan,$id)
	{
		$this->db->where("id_artikel",$id);
		$this->db->update("artikel",$inputan);
	}



}


 ?>