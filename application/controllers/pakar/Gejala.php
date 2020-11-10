<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Gejala extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mgejala");
	}

	public function index()
	{

		$data['gejala'] = $this->Mgejala->tampil();

		$this->load->view('pakar/header');
		$this->load->view('pakar/gejala/tampil',$data);
		$this->load->view('pakar/footer');

	}
	public function tambah()
	{

		$this->load->library('form_validation');
		// 2. membuat rule
		$this->form_validation->set_rules('kode_gejala', 'Kode gejala', 'is_unique[gejala.kode_gejala]');
		// 3. membuat message
		$this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan input ulang");
		// 4. running validasi
		if ($this->form_validation->run() == TRUE) {
			$inputan = $this->input->post();
			$this->load->model('Mgejala');
			$this->Mgejala->tambah($inputan);
			redirect('pakar/gejala', 'refresh');
		}

		$this->load->view('pakar/header');
		$this->load->view('pakar/gejala/tambah');
		$this->load->view('pakar/footer');
	}

	function hapus($id)
	{
		$this->Mgejala->hapus($id);
		redirect('pakar/gejala','refresh');
	}

	function ubah($id)
	{
		$data["gejala"]=$this->Mgejala->ambil($id);
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$this->Mgejala->ubah($inputan,$id);
			redirect("pakar/gejala");
		}

		$this->load->view("pakar/header");
		$this->load->view("pakar/gejala/ubah",$data);
		$this->load->view("pakar/footer");
	}
}
?>