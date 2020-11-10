<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpenyakit extends CI_Model
{
	
	public function tampil()
	{

		$ambil = $this->db->get("penyakit");

		return $ambil->result_array();
	}
	public function simpan($inputan)
	{
		$this->db->insert("penyakit", $inputan);
	}

	public function tambah($inputan)
	{
		$this->db->insert('penyakit', $inputan);
	}

	public function detail($id_penyakit)
	{
		$this->db->where("id_penyakit",$id_penyakit);
		$ambil = $this->db->get("penyakit");
		return $ambil->row_array();
		return $data;
	}

	public function hapus($id_penyakit)
	{
		$this->db->where('id_penyakit', $id_penyakit);
		$this->db->delete('penyakit');
	}

	public function ambil($id_penyakit)
	{
		$this->db->where("id_penyakit",$id_penyakit);
		$ambil = $this->db->get("penyakit");
		return $ambil->row_array();
	}

	public function ubah($inputan,$id)
	{
		$this->db->where("id_penyakit",$id);
		$this->db->update("penyakit",$inputan);
	}

}


?>