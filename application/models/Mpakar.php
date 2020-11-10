<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpakar extends CI_Model
{
	
	public function tampil()
	{

		$ambil = $this->db->get("pakar");

		return $ambil->result_array();
	}

	public function ubah_profil($inputan, $id_pakar)
	{
		// mengubah data di db
		$this->db->where('id_pakar', $id_pakar);
		$this->db->update('pakar', $inputan);

		// mengubah di session
		// ubah di session sama aja membuat session baru
		$inputan['id_pakar'] = $id_pakar;
		$this->session->set_userdata("pakar", $inputan);
	}
	
	public function simpan($inputan)
	{
		$this->db->insert("pakar", $inputan);
	}

	public function tambah($inputan)
	{
		$this->db->insert('pakar', $inputan);
	}

	public function detail($id_pakar)
	{
		$this->db->where("id_pakar",$id_pakar);
		$ambil = $this->db->get("pakar");
		return $ambil->row_array();
		return $data;
	}

	public function hapus($id_pakar)
	{
		$this->db->where('id_pakar', $id_pakar);
		$this->db->delete('pakar');
	}

	public function ambil($id_pakar)
	{
		$this->db->where("id_pakar",$id_pakar);
		$ambil = $this->db->get("pakar");
		return $ambil->row_array();
	}

	public function ubah($inputan,$id)
	{
		$this->db->where("id_pakar",$id);
		$this->db->update("pakar",$inputan);
	}


}


?>