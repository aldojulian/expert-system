<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model
{
	public function login_user($inputan) 
	{
	// inti dari login adalah mencocokkan data dari form ke db
	// jika cocok maka login disimpan ke session
	// session adalah tempat menaruh data di browser
	// 1. mencocokan data dari form ke db tb admin. caranya ambil data berdasarkan username dan password
		$this->db->where('username_admin', $inputan['username']);
		$this->db->where('password_admin', md5($inputan['password']));
		$ambil_admin = $this->db->get('admin');
	// hitung $ambil_admin menggunakan
		$hitung_admin = $ambil_admin->num_rows();
	// jika $hitung_admin == 1, maka lanjut
		if ($hitung_admin==1) {
		// mengubah menjadi array
			$data_admin = $ambil_admin->row_array();
		// menyimpan $data_admin ke session yang bernama admin
			$this->session->set_userdata("admin", $data_admin);
			return "sukses_admin";
		} else {
			$this->db->where('username_pakar', $inputan['username']);
			$this->db->where('password_pakar', md5($inputan['password']));
			$ambil_pakar = $this->db->get('pakar');
			$hitung_pakar = $ambil_pakar->num_rows();
			if ($hitung_pakar==1) {
				$data_pakar = $ambil_pakar->row_array();
				$this->session->set_userdata("pakar", $data_pakar);
				return "sukses_pakar";
			} else {
				$this->db->where('username_klien', $inputan['username']);
				$this->db->where('password_klien', md5($inputan['password']));
				$ambil_klien = $this->db->get('klien');
				$hitung_klien = $ambil_klien->num_rows();
				if ($hitung_klien==1) {
					$data_klien = $ambil_klien->row_array();
					$this->session->set_userdata("klien", $data_klien);
					return "sukses_klien";
				}

			}


		}
	}
}

?>