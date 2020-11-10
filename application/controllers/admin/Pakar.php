<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Pakar extends CI_Controller 
{
	 public function __construct()
	 {
	 	parent::__construct();
	 	if (!$this->session->userdata("admin")) {
			redirect('','refresh'); 
		}
		
	 	$this->load->model("Mpakar");

	 }
	 
	public function index()
	{

		$data['pakar'] = $this->Mpakar->tampil();

		$this->load->view('admin/header');
		$this->load->view('admin/pakar/tampil',$data);
		$this->load->view('admin/footer');

	}
	public function tambah()
	{
		// membuat validasi CI
		// 1. load library form_validation CI
		$this->load->library('form_validation');
		// 2. membuat rule
		$this->form_validation->set_rules('username_pakar', 'Username pakar', 'is_unique[pakar.username_pakar]|required');
		$this->form_validation->set_rules('password_pakar', 'Password pakar', 'required');
		// 3. membuat message
		$this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan input ulang");
		$this->form_validation->set_message("required", "%s tidak boleh kosong");
		// 4. running validasi
		if ($this->form_validation->run() == TRUE) {
			$inputan = $this->input->post();
			$this->load->model('Mpakar');
			$this->Mpakar->tambah($inputan);
			redirect('admin/pakar', 'refresh');
		}
		$this->load->view('admin/header');
		$this->load->view('admin/pakar/tambah');
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Mpakar->hapus($id);
		redirect('admin/pakar','refresh');
	}

	function detail ($id)
	{
		$data['pakar'] = $this->Mpakar->detail($id);
		$this->load->view('admin/header');
		$this->load->view('admin/pakar/detail',$data);
		$this->load->view('admin/footer');
	}

	function ubah($id)
	{
		$data["pakar"]=$this->Mpakar->ambil($id);
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$this->Mpakar->ubah($inputan,$id);
			redirect("admin/pakar");
		}

		$this->load->view("admin/header");
		$this->load->view("admin/pakar/ubah",$data);
		$this->load->view("admin/footer");
	}
}
?>