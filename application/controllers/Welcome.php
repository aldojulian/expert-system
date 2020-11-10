<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	
	public function index()
	{
		$inputan = $this->input->post();
		if ($inputan) {
			$this->load->model('Mlogin');
			$hasil = $this->Mlogin->login_user($inputan);
			if ($hasil=="sukses_admin") {
				redirect('admin','refresh');
			} elseif ($hasil=="sukses_pakar") {
				redirect('pakar','refresh');
			} elseif ($hasil=="sukses_klien") {
				redirect('klien','refresh');

			}
		}
		$this->load->view("login");
	}

	public function daftar()
	{
		// memanggil library
		$this->load->library('form_validation');
		// membuat aturan validasi
		$this->form_validation->set_rules('username_klien', 'Username klien', 'required|min_length[3]|max_length[12]|is_unique[klien.username_klien]');
		$this->form_validation->set_rules('password_klien', 'Password klien', 'required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('no_identitas_klien', 'Nomor identitas klien', 'required|min_length[15]|max_length[20]|is_unique[klien.no_identitas_klien]');
		// mengatur pesan
		$this->form_validation->set_message("required", "%s tidak boleh kosong");
		$this->form_validation->set_message("min_length", "%s tidak memenuhi minimal karakter");
		$this->form_validation->set_message("max_length", "%s melebihi maksimal karakter");
		$this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan masukkan ulang");
		// menjalankan form_validation
		if ($this->form_validation->run() == TRUE) {
			$inputan = $this->input->post();
			$this->load->model("Mklien");
			$inputan['password_klien'] = md5($inputan['password_klien']);
			$this->Mklien->tambah($inputan);
			redirect('','refresh');
		}
		$this->load->view("daftar");
	}
}


?>