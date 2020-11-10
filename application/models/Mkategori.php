<?php 


Class Mkategori extends CI_Model
{

	function tampil_kategori()
	{
		// select * from kategori 
		$ambil = $this->db->get("kategori");
		// $ambil jadikan datanya dalam bentuk array multidimensi
		return $ambil->result_array();
	}
	function simpan_kategori($inputan)
	{
		 $this->db->insert("kategori", $inputan);
	}

	function hapus_kategori($id_kategori)
	{
		$this->db->where("id_kategori", $id_kategori);
		$this->db->delete("kategori");
	}

	function ambil_kategori($id_kategori)
	{
		$this->db->where("id_kategori",$id_kategori);
		$ambil = $this->db->get("kategori");
		return $ambil->row_array();
	}

	function ubah_kategori($inputan,$id)
	{
		$this->db->where("id_kategori",$id);
		$this->db->update("kategori",$inputan);

	}
}


 ?>