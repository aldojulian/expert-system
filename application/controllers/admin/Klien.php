<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Klien extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mklien");

	}

	public function index()
	{

		$data['klien'] = $this->Mklien->tampil();

		$this->load->view('admin/header');
		$this->load->view('admin/klien/tampil',$data);
		$this->load->view('admin/footer');

	}
	public function tambah()
	{
		// membuat validasi CI
		// 1. load library form_validation CI
		$this->load->library('form_validation');
		// 2. membuat rule
		$this->form_validation->set_rules('username_klien', 'Username klien', 'is_unique[klien.username_klien]|required');
		$this->form_validation->set_rules('password_klien', 'Password klien', 'required');
		// 3. membuat message
		$this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan input ulang");
		$this->form_validation->set_message("required", "%s tidak boleh kosong");
		// 4. running validasi
		if ($this->form_validation->run() == TRUE) {
			$inputan = $this->input->post();
			$this->load->model('Mpasien');
			$this->Mpasien->tambah($inputan);
			redirect('admin/klien', 'refresh');
		}
		$this->load->view('admin/header');
		$this->load->view('admin/klien/tambah');
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Mklien->hapus($id);
		redirect('admin/klien','refresh');
	}

	function detail ($id)
	{
		$data['klien'] = $this->Mklien->detail($id);
		$this->load->view('admin/header');
		$this->load->view('admin/klien/detail',$data);
		$this->load->view('admin/footer');
	}

	function ubah($id)
	{
		$data["klien"]=$this->Mklien->ambil($id);
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$this->Mklien->ubah($inputan,$id);
			redirect("admin/klien");
		}

		$this->load->view("admin/header");
		$this->load->view("admin/klien/ubah",$data);
		$this->load->view("admin/footer");
	}
}
?>