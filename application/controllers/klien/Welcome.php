<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		$data['artikel'] = $this->Martikel->tampil();
		$this->load->view('klien/header');
		$this->load->view('klien/index', $data);
		$this->load->view('klien/footer');

	}
}


?>