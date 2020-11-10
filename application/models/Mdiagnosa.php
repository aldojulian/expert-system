<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdiagnosa extends CI_Model
{
	
	public function tambah($inputan, $id_klien)
	{
		print_r($inputan);
		// disini akan menyimpan 2 kali

		// menyiapkan data untuk disimpan ke tabel diagnosa
		date_default_timezone_set("Asia/Jakarta");
		$data_session = $this->session->userdata("pakar");
		$inputan_diagnosa['id_pakar'] = $data_session['id_pakar'];
/*		print_r($_SESSION);*/
		$inputan_diagnosa['id_klien'] = $id_klien;
		$inputan_diagnosa['tanggal_diagnosa'] = date("Y-m-d H:i:s");
		// menyimpan data ke tabel diagnosa
		$this->db->insert('diagnosa', $inputan_diagnosa);

		// menyiapkan data untuk disimpan ke detail diagnosa
		// untuk id diagnosa harus mendapatkan dari id_diagnosa yang baru disimpan
		$inputan_detail['id_diagnosa'] = $this->db->insert_id();
		foreach ($inputan['data'] as $key => $id_gejala) {
			$inputan_detail['id_gejala'] = $id_gejala;
			$this->db->insert('detail_diagnosa', $inputan_detail);
		}
		return $inputan_detail['id_diagnosa'];
	}

	public function tampil_detail_diagnosa($id_diagnosa)
	{
		$this->db->join('gejala', 'gejala.id_gejala = detail_diagnosa.id_gejala','left');
		$this->db->where('id_diagnosa', $id_diagnosa);
		$ambil = $this->db->get('detail_diagnosa');
		return $ambil->result_array();
	}

	public function hitung($id_diagnosa)
	{
		$this->load->model('Mpenyakit');
		$this->load->model('Mpengetahuan');
		// mengambil semua data penyakit
		$penyakit = $this->Mpenyakit->tampil();
		// mengambil data diagnosa yang dipilih
		$diagnosa = $this->tampil_detail_diagnosa($id_diagnosa);
		// menghitung cf
		foreach ($penyakit as $key => $value) {
			$id_penyakit = $value['id_penyakit'];
			foreach ($diagnosa as $key_d => $value_d) {
				if ($key_d==0) {
					$key_cf = $key_d;
					$key_1 = $key_d;
					$key_2 = $key_d+1;
					$id_gejala_1 = $diagnosa[$key_1]['id_gejala'];
					$id_gejala_2 = $diagnosa[$key_2]['id_gejala'];
					$pengetahuan_1 = $this->Mpengetahuan->cek_pengetahuan($id_penyakit, $id_gejala_1);
					$pengetahuan_2 = $this->Mpengetahuan->cek_pengetahuan($id_penyakit, $id_gejala_2);
					if (!empty($pengetahuan_1)) {
						$mb_1 = $pengetahuan_1['mb_pengetahuan'];
						$md_1 = $pengetahuan_1['md_pengetahuan'];
					} else {
						$mb_1 = 0;
						$md_1 = 0;
					}
					if (!empty($pengetahuan_2)) {
						$mb_2 = $pengetahuan_2['mb_pengetahuan'];
						$md_2 = $pengetahuan_2['md_pengetahuan'];
					} else {
						$mb_2 = 0;
						$md_2 = 0;
					}
					$cf[$id_penyakit]['mb'][$key_cf] = $mb_1+($mb_2*(1-$mb_1));
					$cf[$id_penyakit]['md'][$key_cf] = $md_1+($md_2*(1-$md_1));
				} elseif ($key_d > 1) {
					$key_cf = $key_d-1;
					$key_1 = $key_d-2;
					$key_2 = $key_d;
					$id_gejala_2 = $diagnosa[$key_2]['id_gejala'];
					$pengetahuan_2 = $this->Mpengetahuan->cek_pengetahuan($id_penyakit, $id_gejala_2);
					$mb_1 = $cf[$id_penyakit]['mb'][$key_1];
					$md_1 = $cf[$id_penyakit]['md'][$key_1];
					if (!empty($pengetahuan_2)) {
						$mb_2 = $pengetahuan_2['mb_pengetahuan'];
						$md_2 = $pengetahuan_2['md_pengetahuan'];
					} else {
						$mb_2 = 0;
						$md_2 = 0;
					}
					$cf[$id_penyakit]['mb'][$key_cf] = $mb_1+($mb_2*(1-$mb_1));
					$cf[$id_penyakit]['md'][$key_cf] = $md_1+($md_2*(1-$md_1));
				}
				$cf_akhir[$id_penyakit] = end($cf[$id_penyakit]['mb']) - end($cf[$id_penyakit]['md']);
			}
		}
		arsort($cf_akhir);
		foreach ($cf_akhir as $id_penyakit => $nilai) {
			$inputan_hasil['id_diagnosa'] = $id_diagnosa;
			$inputan_hasil['id_penyakit'] = $id_penyakit;
			$inputan_hasil['cf_hasil'] = $nilai;
			$this->db->insert('hasil', $inputan_hasil);
			break;
		}


	}

	public function detail_diagnosa($id_diagnosa)
	{
		$this->db->join('klien', 'diagnosa.id_klien = klien.id_klien', 'left');
		$this->db->join('pakar', 'diagnosa.id_pakar = pakar.id_pakar', 'left');
		$this->db->where('id_diagnosa', $id_diagnosa);
		$ambil = $this->db->get('diagnosa');
		return $ambil->row_array();
	}

	public function tampil_hasil($id_diagnosa)
	{
		$this->db->join('penyakit', 'hasil.id_penyakit = penyakit.id_penyakit', 'left');
		$this->db->where('id_diagnosa', $id_diagnosa);
		$ambil = $this->db->get('hasil');
		return $ambil->row_array();
	}

	public function ubah_saran($inputan, $id_diagnosa)
	{
		$this->db->where('id_diagnosa', $id_diagnosa);
		$this->db->update('hasil', $inputan);
	}

	public function tampil_diagnosa_klien($id_klien)
	{
		$this->db->join('pakar', 'pakar.id_pakar = diagnosa.id_pakar', 'left');
		$this->db->where('id_klien', $id_klien);
		$ambil = $this->db->get('diagnosa');
		return $ambil->result_array();
	}




}


?>