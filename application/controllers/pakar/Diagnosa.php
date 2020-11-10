<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Diagnosa extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mklien");
		$this->load->model("Mgejala");
		$this->load->model("Mdiagnosa");


	}

	public function index()
	{

		$data['klien'] = $this->Mklien->tampil();
		$this->load->view('pakar/header');
		$this->load->view('pakar/diagnosa/tampil',$data);
		$this->load->view('pakar/footer');
	}

	public function tambah($id_klien)
	{
		$data['klien'] = $this->Mklien->detail($id_klien);
		$data['gejala'] = $this->Mgejala->tampil();
		$inputan = $this->input->post();
		if ($inputan) {
			$id_diagnosa = $this->Mdiagnosa->tambah($inputan, $id_klien);
			redirect('pakar/diagnosa/hasil/'.$id_diagnosa,'refresh');
		}
		$this->load->view('pakar/header',$data);
		$this->load->view('pakar/diagnosa/tambah');
		$this->load->view('pakar/footer');
	}

	public function hasil($id_diagnosa)
	{
		$this->Mdiagnosa->hitung($id_diagnosa);
		$data['diagnosa'] = $this->Mdiagnosa->detail_diagnosa($id_diagnosa);
		$data['detail'] = $this->Mdiagnosa->tampil_detail_diagnosa($id_diagnosa);
		$data['hasil'] = $this->Mdiagnosa->tampil_hasil($id_diagnosa);
		$inputan = $this->input->post();
		if ($inputan) {
			$this->Mdiagnosa->ubah_saran($inputan, $id_diagnosa);
			redirect('pakar/diagnosa', 'refresh');
		}
		$this->load->view('pakar/header');
		$this->load->view('pakar/diagnosa/hasil', $data);
		$this->load->view('pakar/footer');
	}
	
}

?>