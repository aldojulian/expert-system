<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Penyakit extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mpenyakit");

	}

	public function index()
	{

		$data['penyakit'] = $this->Mpenyakit->tampil();

		$this->load->view('pakar/header');
		$this->load->view('pakar/penyakit/tampil',$data);
		$this->load->view('pakar/footer');

	}
	public function tambah()
	{
		$this->load->library('form_validation');
		// 2. membuat rule
		$this->form_validation->set_rules('kode_penyakit', 'Kode penyakit', 'is_unique[penyakit.kode_penyakit]');
		// 3. membuat message
		$this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan input ulang");
		// 4. running validasi
		if ($this->form_validation->run() == TRUE) {
			$inputan = $this->input->post();
			$this->load->model('Mpenyakit');
			$this->Mpenyakit->tambah($inputan);
			redirect('pakar/penyakit', 'refresh');
		}
		$this->load->view('pakar/header');
		$this->load->view('pakar/penyakit/tambah');
		$this->load->view('pakar/footer');
	}

	function hapus($id)
	{
		$this->Mpenyakit->hapus($id);
		redirect('pakar/penyakit','refresh');
	}

	function detail ($id)
	{
		$data['penyakit'] = $this->Mpenyakit->detail($id);
		$this->load->view('pakar/header');
		$this->load->view('pakar/penyakit/detail',$data);
		$this->load->view('pakar/footer');
	}

	function ubah($id)
	{
		$data["penyakit"]=$this->Mpenyakit->ambil($id);
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$this->Mpenyakit->ubah($inputan,$id);
			redirect("pakar/penyakit");
		}

		$this->load->view("pakar/header");
		$this->load->view("pakar/penyakit/ubah",$data);
		$this->load->view("pakar/footer");
	}
}
?>