<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("klien")) {
			redirect('','refresh'); 
		}
		$this->load->model('Mklien');

	}	

	public function index()
	{
		$data['klien'] = $this->session->userdata("klien");
		$this->load->view('klien/header', $data);
		$this->load->view('klien/profil');
		$this->load->view('klien/footer');

	}

	public function ubah()
	{
		$data['pesan'] = "";
		$data['klien'] = $this->session->userdata("klien");
		$this->load->library('form_validation');
		// membuat is unique. jika data sama dengan dirinya, maka tidak ada is unique.
		if ($this->input->post("username_klien")!==$data['klien']['username_klien']) {
			$is_unique_username = '|is_unique[klien.username_klien]';
		} else {
			$is_unique_username = '';
		}

		if ($this->input->post("no_identitas_klien")!==$data['klien']['no_identitas_klien']) {
			$is_unique_identitas = '|is_unique[klien.no_identitas_klien]';
		} else {
			$is_unique_identitas = '';
		}
		
		$this->form_validation->set_rules('username_klien', 'Username klien', 'required|min_length[3]|max_length[12]'.$is_unique_username);
		$this->form_validation->set_rules('no_identitas_klien', 'Nomor identitas klien', 'required'.$is_unique_identitas);
		// mengatur pesan
		$this->form_validation->set_message("required", "%s tidak boleh kosong");
		$this->form_validation->set_message("min_length", "%s tidak memenuhi minimal karakter");
		$this->form_validation->set_message("max_length", "%s melebihi maksimal karakter");
		$this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan masukkan ulang");

		if ($this->form_validation->run() == TRUE) {
			$inputan = $this->input->post();
			if (empty($inputan['password_lama'])) {
				$kirim['username_klien'] = $inputan['username_klien'];
				$kirim['password_klien'] = $data['klien']['password_klien'];
				$kirim['nama_klien'] = $inputan['nama_klien'];
				$kirim['jenis_kelamin_klien'] = $inputan['jenis_kelamin_klien'];
				$kirim['telepon_klien'] = $inputan['telepon_klien'];
				$kirim['alamat_klien'] = $inputan['alamat_klien'];
				$kirim['tanggal_lahir_klien'] = $inputan['tanggal_lahir_klien'];
				$kirim['no_identitas_klien'] = $inputan['no_identitas_klien'];
				$this->Mklien->ubah_profil($kirim, $data['klien']['id_klien']);
				redirect('klien/profil','refresh');
			} else {
				// jika password lama diisi, maka cek apakah password lama benar
				if (md5($inputan['password_lama'])==$data['klien']['password_klien']) {
					//pw baru dan pw konfirmasi tidak boleh kosong
					if (!empty($inputan['password_baru']) AND !empty($inputan['password_konfirmasi'])) {
						if ($inputan['password_baru']==$inputan['password_konfirmasi']) {
							$kirim['username_klien'] = $inputan['username_klien'];
							$kirim['password_klien'] = md5($inputan['password_baru']);
							$kirim['nama_klien'] = $inputan['nama_klien'];
							$kirim['jenis_kelamin_klien'] = $inputan['jenis_kelamin_klien'];
							$kirim['telepon_klien'] = $inputan['telepon_klien'];
							$kirim['alamat_klien'] = $inputan['alamat_klien'];
							$kirim['tanggal_lahir_klien'] = $inputan['tanggal_lahir_klien'];
							$kirim['no_identitas_klien'] = $inputan['no_identitas_klien'];
							$this->Mklien->ubah_profil($kirim, $data['klien']['id_klien']);
							redirect('klien/profil','refresh');
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
		$this->load->view("klien/header", $data);
		$this->load->view("klien/ubah_profil");
		$this->load->view("klien/footer");
	}
}


?>