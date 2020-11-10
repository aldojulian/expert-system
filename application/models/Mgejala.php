<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgejala extends CI_Model
{
	
	public function tampil()
	{

		$ambil = $this->db->get("gejala");

		return $ambil->result_array();
	}
	public function simpan($inputan)
	{
		$this->db->insert("gejala", $inputan);
	}

	public function tambah($inputan)
	{
		$this->db->insert('gejala', $inputan);
	}

	public function detail($id_gejala)
	{
		$this->db->where("id_gejala",$id_gejala);
		$ambil = $this->db->get("gejala");
		return $ambil->row_array();
	}

	public function hapus($id_gejala)
	{
		$this->db->where('id_gejala', $id_gejala);
		$this->db->delete('gejala');
	}

	public function ambil($id_gejala)
	{
		$this->db->where("id_gejala",$id_gejala);
		$ambil = $this->db->get("gejala");
		return $ambil->row_array();
	}

	public function ubah($inputan,$id)
	{
		$this->db->where("id_gejala",$id);
		$this->db->update("gejala",$inputan);
	}

}


?>