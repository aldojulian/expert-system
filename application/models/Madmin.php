<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model
{
	
	public function ubah_profil($inputan, $id_admin)
	{
		// mengubah data di db
		$this->db->where('id_admin', $id_admin);
		$this->db->update('admin', $inputan);

		// mengubah di session
		// ubah di session sama aja membuat session baru
		$inputan['id_admin'] = $id_admin;
		$this->session->set_userdata("admin", $inputan);
	}
}

 ?>