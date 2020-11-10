<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Pengetahuan extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mpengetahuan");
		$this->load->model("Mpenyakit");
	}

	public function index()
	{

		$data['pengetahuan'] = $this->Mpengetahuan->tampil();

		$this->load->view('pakar/header');
		$this->load->view('pakar/pengetahuan/tampil',$data);
		$this->load->view('pakar/footer');

	}
	public function tambah()
	{
		$data['penyakit'] = $this->Mpenyakit->tampil();
		$data['gejala'] = $this->Mgejala->tampil();
		$inputan = $this->input->post();
		if ($inputan) {
			$this->Mpengetahuan->tambah($inputan);
			redirect('pakar/pengetahuan', 'refresh');
		}
		$this->load->view('pakar/header', $data);
		$this->load->view('pakar/pengetahuan/tambah');
		$this->load->view('pakar/footer');
	}

	function hapus($id)
	{
		$this->Mpengetahuan->hapus($id);
		redirect('pakar/pengetahuan','refresh');
	}


	function ubah($id)
	{
		$data['penyakit'] = $this->Mpenyakit->tampil();
		$data['gejala'] = $this->Mgejala->tampil();
		$data["pengetahuan"]=$this->Mpengetahuan->ambil($id);
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$this->Mpengetahuan->ubah($inputan,$id);
			redirect("pakar/pengetahuan");
		}

		$this->load->view("pakar/header");
		$this->load->view("pakar/pengetahuan/ubah",$data);
		$this->load->view("pakar/footer");
	}
}
?>