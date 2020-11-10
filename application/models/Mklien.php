<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mklien extends CI_Model
{
	
	public function tampil()
	{

		$ambil = $this->db->get("klien");

		return $ambil->result_array();
	}
	public function ubah_profil($inputan, $id_klien)
	{
		// mengubah data di db
		$this->db->where('id_klien', $id_klien);
		$this->db->update('klien', $inputan);

		// mengubah di session
		// ubah di session sama aja membuat session baru
		$inputan['id_klien'] = $id_klien;
		$this->session->set_userdata("klien", $inputan);
	}
	public function simpan($inputan)
	{
		$this->db->insert("klien", $inputan);
	}

	public function tambah($inputan)
	{
		$this->db->insert('klien', $inputan);
	}

	public function detail($id_klien)
	{
		$this->db->where("id_klien",$id_klien);
		$ambil = $this->db->get("klien");
		return $ambil->row_array();
		return $data;
	}

	public function hapus($id_klien)
	{
		$this->db->where('id_klien', $id_klien);
		$this->db->delete('klien');
	}

	public function ambil($id_klien)
	{
		$this->db->where("id_klien",$id_klien);
		$ambil = $this->db->get("klien");
		return $ambil->row_array();
	}

	public function ubah($inputan,$id)
	{
		$this->db->where("id_klien",$id);
		$this->db->update("klien",$inputan);
	}

}


?>