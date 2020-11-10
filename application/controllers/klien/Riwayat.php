<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	if (!$this->session->userdata("klien")) {
		redirect('','refresh');
	}
	$this->load->model('Mdiagnosa');
}

public function index()
{
	$data['klien'] = $this->session->userdata("klien");
	$data['riwayat'] = $this->Mdiagnosa->tampil_diagnosa_klien($data['klien']['id_klien']);
	$this->load->view('klien/header');
	$this->load->view('klien/riwayat', $data);
	$this->load->view('klien/footer');

}

public function detail($id_diagnosa)
{
	$data['klien'] = $this->session->userdata("klien");
	$data['hasil'] = $this->Mdiagnosa->tampil_hasil($id_diagnosa);
	$this->load->view('klien/header');
	$this->load->view('klien/detail', $data);
	$this->load->view('klien/footer');

}

}


?>