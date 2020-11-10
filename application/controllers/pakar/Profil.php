<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function __construct()
	 {
	 	parent::__construct();
	 	if (!$this->session->userdata("pakar")) {
			redirect('','refresh'); 
		}
		$this->load->model('Mpakar');

	 }

	 public function index()
	 {
	 	$data['pakar'] = $this->session->userdata("pakar");
	 	$this->load->view('pakar/header', $data);
	 	$this->load->view('pakar/profil');
	 	$this->load->view('pakar/footer');

	 }

	public function ubah()
	{
		$data['pesan'] = "";
		$data['pakar'] = $this->session->userdata("pakar");
		$inputan = $this->input->post();
		if ($inputan) {
			if (empty($inputan['password_lama'])) {
				$kirim['username_pakar'] = $inputan['username_pakar'];
				$kirim['password_pakar'] = $data['pakar']['password_pakar'];
				$kirim['nama_pakar'] = $inputan['nama_pakar'];
				$kirim['telepon_pakar'] = $inputan['telepon_pakar'];
				$kirim['alamat_pakar'] = $inputan['alamat_pakar'];
				$this->Mpakar->ubah_profil($kirim, $data['pakar']['id_pakar']);
				redirect('pakar/profil','refresh');
			} else {
				// jika password lama diisi, maka cek apakah password lama benar
				if (md5($inputan['password_lama'])==$data['pakar']['password_pakar']) {
					//pw baru dan pw konfirmasi tidak boleh kosong
					if (!empty($inputan['password_baru']) AND !empty($inputan['password_konfirmasi'])) {
						if ($inputan['password_baru']==$inputan['password_konfirmasi']) {
							$kirim['username_pakar'] = $inputan['username_pakar'];
							$kirim['password_pakar'] = md5($inputan['password_baru']);
							$kirim['nama_pakar'] = $inputan['nama_pakar'];
							$this->Mpakar->ubah_profil($kirim, $data['pakar']['id_pakar']);
							redirect('pakar/profil','refresh');
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
		$this->load->view("pakar/header", $data);
		$this->load->view("pakar/ubah_profil");
		$this->load->view("pakar/footer");
	}
}


 ?>