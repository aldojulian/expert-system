<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Artikel extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Martikel");
	} 

	public function index()
	{

		$data['artikel'] = $this->Martikel->tampil();

		$this->load->view('admin/header');
		$this->load->view('admin/artikel/tampil',$data);
		$this->load->view('admin/footer');

	}
	public function tambah()
	{
		$data['artikel'] = $this->Martikel->tampil();
		$inputan = $this->input->post();
		if ($inputan) {
			$this->Martikel->tambah($inputan);
/*			redirect('admin/artikel', 'refresh');*/
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/artikel/tambah');
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Martikel->hapus($id);
		redirect('admin/artikel','refresh');
	}

	function ubah($id)
	{
		$data["artikel"]=$this->Martikel->detail($id);
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$this->Martikel->ubah($inputan,$id);
			redirect("admin/artikel");
		}

		$this->load->view("admin/header");
		$this->load->view("admin/artikel/ubah",$data);
		$this->load->view("admin/footer");
	}
}
?>