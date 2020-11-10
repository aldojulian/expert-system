<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function __construct()
	 {
	 	parent::__construct();
	 	if (!$this->session->userdata("admin")) {
			redirect('','refresh'); 
		}
		$this->load->model('Madmin');

	 }

	 public function index()
	 {
	 	$data['admin'] = $this->session->userdata("admin");
	 	$this->load->view('admin/header', $data);
	 	$this->load->view('admin/profil');
	 	$this->load->view('admin/footer');

	 }

	public function ubah()
	{
		$data['pesan'] = "";
		$data['admin'] = $this->session->userdata("admin");
		$inputan = $this->input->post();
		if ($inputan) {
			if (empty($inputan['password_lama'])) {
				$kirim['username_admin'] = $inputan['username_admin'];
				$kirim['password_admin'] = $data['admin']['password_admin'];
				$kirim['nama_admin'] = $inputan['nama_admin'];
				$this->Madmin->ubah_profil($kirim, $data['admin']['id_admin']);
				redirect('admin/profil','refresh');
			} else {
				// jika password lama diisi, maka cek apakah password lama benar
				if (md5($inputan['password_lama'])==$data['admin']['password_admin']) {
					//pw baru dan pw konfirmasi tidak boleh kosong
					if (!empty($inputan['password_baru']) AND !empty($inputan['password_konfirmasi'])) {
						if ($inputan['password_baru']==$inputan['password_konfirmasi']) {
							$kirim['username_admin'] = $inputan['username_admin'];
							$kirim['password_admin'] = md5($inputan['password_baru']);
							$kirim['nama_admin'] = $inputan['nama_admin'];
							$this->Madmin->ubah_profil($kirim, $data['admin']['id_admin']);
							redirect('admin/profil','refresh');
						} else {
							$data['pesan'] = "pesan_3";
						}
					} else {
						$data['pesan'] = "pesan_2";
					}
				} else{
					$data['pesan'] = "pesan_1";
				}
			}
		}
		$this->load->view("admin/header", $data);
		$this->load->view("admin/ubah_profil");
		$this->load->view("admin/footer");
	}
}


 ?>