<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("klien")) {
			redirect('','refresh');
		}
		$this->load->model('Martikel');
	}

	public function index()
	{
		$data['artikel'] = $this->Martikel->detail($id_artikel);
		$this->load->view('klien/header');
		$this->load->view('klien/artikel', $data);
		$this->load->view('klien/footer');

	}


	public function detail($id_artikel)
	{
		$data['artikel'] = $this->Martikel->detail($id_artikel);
		$this->load->view('klien/header');
		$this->load->view('klien/detail_artikel', $data);
		$this->load->view('klien/footer');

	}

}


?>