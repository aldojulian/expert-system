<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengetahuan extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("pakar")) {
			redirect('','refresh');
		}
		$this->load->model('Mpengetahuan');
		$this->load->model('Mpenyakit');
		$this->load->model('Mgejala');
	}


	public function tampil()
	{
		$this->db->join('penyakit', 'penyakit.id_penyakit = pengetahuan.id_penyakit', 'left');
		$this->db->join('gejala', 'gejala.id_gejala = pengetahuan.id_gejala', 'left');
		$ambil = $this->db->get("pengetahuan");
		$data = $ambil->result_array();
		return $data;
	}

	public function simpan($inputan)
	{
		$this->db->insert("pengetahuan", $inputan);
	}

	public function tambah($inputan)
	{
		$this->db->insert('pengetahuan', $inputan);
	}

	public function detail($id_pengetahuan)
	{
		$this->db->where("id_pengetahuan",$id_pengetahuan);
		$ambil = $this->db->get("pengetahuan");
		return $ambil->row_array();
		return $data;
	}

	public function hapus($id_pengetahuan)
	{
		$this->db->where('id_pengetahuan', $id_pengetahuan);
		$this->db->delete('pengetahuan');
	}

	public function ambil($id_pengetahuan)
	{
		$this->db->where("id_pengetahuan",$id_pengetahuan);
		$ambil = $this->db->get("pengetahuan");
		return $ambil->row_array();
	}

	public function ubah($inputan,$id)
	{
		$this->db->where("id_pengetahuan",$id);
		$this->db->update("pengetahuan",$inputan);
	}

		public function cek_pengetahuan($id_penyakit, $id_gejala)
	{
		$this->db->where('id_penyakit', $id_penyakit);
		$this->db->where('id_gejala', $id_gejala);
		$ambil = $this->db->get('pengetahuan');
		$data = $ambil->row_array();
		return $data;
	}

}


?>