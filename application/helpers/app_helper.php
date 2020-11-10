<?php 

function nama_pakar()
{
	$CI =& get_instance();
	$data = $CI->session->userdata("pakar");
	return $data['nama_pakar'];
}

function nama_admin()
{
	$CI =& get_instance();
	$data = $CI->session->userdata("admin");
	return $data['nama_admin'];
}

function nama_klien()
{
	$CI =& get_instance();
	$data = $CI->session->userdata("klien");
	return $data['nama_klien'];
}

 ?>