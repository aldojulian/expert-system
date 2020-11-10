<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Detail_pengetahuan extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mdetail_pengetahuan");
		$this->load->model("Mpengetahuan");


	}

	public function index($id_pengetahuan)
	{
		$data['id_pengetahuan'] = $id_pengetahuan;
		$data['detail_pengetahuan'] = $this->Mdetail_pengetahuan->tampil($id_pengetahuan);
		$this->load->view('pakar/header');
		$this->load->view('pakar/detail_pengetahuan/tampil',$data);
		$this->load->view('pakar/footer');
	}

	public function tambah($id_pengetahuan)
	{
		$data['pengetahuan'] = $this->Mpengetahuan->detail($id_pengetahuan);
		$inputan = $this->input->post();
		if ($inputan) {
			$this->Mdetail_pengetahuan->tambah($inputan);
			redirect('pakar/detail_pengetahuan/index/'.$id_pengetahuan,'refresh');
		}
		$this->load->view('pakar/header', $data);
		$this->load->view('pakar/detail_pengetahuan/tambah');
		$this->load->view('pakar/footer');

	}

	public function ubah($id_detail_pengetahuan)
	{
		$data['detail_pengetahuan'] = $this->Mdetail_pengetahuan->detail($id_detail_pengetahuan);
		$inputan = $this->input->post();
		if ($inputan) {
			$this->Mdetail_pengetahuan->ubah($inputan, $id_detail_pengetahuan);
			redirect('pakar/detail_pengetahuan/index/'.$data['detail_pengetahuan']['id_pengetahuan'],'refresh');
		}
		$this->load->view('pakar/header', $data);
		$this->load->view('pakar/detail_pengetahuan/ubah');
		$this->load->view('pakar/footer');
	}

	public function hapus($id_pengetahuan, $id_detail_pengetahuan)
	{
		$this->Mdetail_pengetahuan->hapus($id_detail_pengetahuan);
		redirect('pakar/detail_pengetahuan/index/'.$id_pengetahuan,'refresh');
	}
}
?>