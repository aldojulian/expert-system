<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Klien extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mklien");
		$this->load->model("Mdiagnosa");

	}

	public function index()
	{

		$data['klien'] = $this->Mklien->tampil();

		$this->load->view('pakar/header');
		$this->load->view('pakar/klien/tampil',$data);
		$this->load->view('pakar/footer');

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
			$this->load->model('Mklien');
			$this->Mklien->tambah($inputan);
			redirect('pakar/klien', 'refresh');
		}
		$this->load->view('pakar/header');
		$this->load->view('pakar/klien/tambah');
		$this->load->view('pakar/footer');
	}

	function hapus($id)
	{
		$this->Mklien->hapus($id);
		redirect('pakar/klien','refresh');
	}

	function detail ($id)
	{
		$data['klien'] = $this->Mklien->detail($id);
		$this->load->view('pakar/header');
		$this->load->view('pakar/klien/detail',$data);
		$this->load->view('pakar/footer');
	}

	function ubah($id)
	{
		$data["klien"]=$this->Mklien->ambil($id);
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$this->Mklien->ubah($inputan,$id);
			redirect("pakar/klien");
		}

		$this->load->view("pakar/header");
		$this->load->view("pakar/klien/ubah",$data);
		$this->load->view("pakar/footer");
	}

	function riwayat($id)
	{
		$data['riwayat']=$this->Mdiagnosa->tampil_diagnosa_klien($id);

		$this->load->view("pakar/header");
		$this->load->view("pakar/klien/riwayat",$data);
		$this->load->view("pakar/footer");
	}

	function detail_riwayat($id_diagnosa)
	{
		$data['klien'] = $this->Mdiagnosa->detail_diagnosa($id_diagnosa);
		$data['diagnosa'] = $this->Mdiagnosa->detail_diagnosa($id_diagnosa);
		$data['detail'] = $this->Mdiagnosa->tampil_detail_diagnosa($id_diagnosa);
		$data['hasil'] = $this->Mdiagnosa->tampil_hasil($id_diagnosa);
		$this->load->view("pakar/header");
		$this->load->view("pakar/klien/detail_riwayat",$data);
		$this->load->view("pakar/footer");
	}
}
?>