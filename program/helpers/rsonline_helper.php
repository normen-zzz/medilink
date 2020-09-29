<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* function tampil_ip()
{
	$CI = get_instance();
	$CI->load->model('ip_model');
	$ip=$CI->input->server('REMOTE_ADDR');
	$kd_cabang = $CI->ip_model->get_info($ip);
	return $kd_cabang.' ('.$ip.')';
}

function show_ip()
{
	$CI = get_instance();
	$CI->load->model('ip_model');
	$ip=$CI->input->server('REMOTE_ADDR');
	$kd_cabang = $CI->ip_model->get_info($ip);
	return $ip;
}

function show_no_ruang()
{
	$CI = get_instance();
	$CI->load->model('ip_model');
	$ip=$CI->input->server('REMOTE_ADDR');
	$no_ruang = $CI->ip_model->get_info_no_ruang($ip);
	return $no_ruang;
}

function get_no_ruang()
{
	$CI = get_instance();
	$CI->load->model('ip_model');
	$ip=$CI->input->server('REMOTE_ADDR');
	$no_ruang = $CI->ip_model->get_no_ruang($ip);
	return $no_ruang;
}

function info_ip()
{
	$CI = get_instance();
	$CI->load->model('ip_model');
	$ip=$CI->input->server('REMOTE_ADDR');
	$h = $CI->ip_model->get_info_ip($ip);
	return $h;
} */

function user_info()
{
	$CI = get_instance();
	//$cabang = info_ip();
	$CI->load->model('masuk_model');
	//$CI->config->load('campus');
	//$arr_pt = $CI->config->item('arr_pt');
	//$arr_pt_short = $CI->config->item('arr_pt_short');
	
	// User Login Information
	$user_info = array(
		//'tgl_uji_now' => date('Y-m-d'),
		'nama' => $CI->session->userdata('nama'),
		'dept' => $CI->session->userdata('dept'),
		//'pic' => 'photo-'.$CI->session->userdata('nip').'.jpg', 
		'nik' => $CI->session->userdata('nik'), 
		'dokterid' => $CI->session->userdata('dokterid'), 
		/*'nama_pt' => $arr_pt[$CI->session->userdata('kode_pt')], 
		'nama_pt_short' => $arr_pt_short[$CI->session->userdata('kode_pt')], 
		'dept' => $CI->session->userdata('dept'), 		
		'kode_cabang' => $cabang->kode_cabang, 
		'nm_kampus' => $cabang->nm_kampus,
		'kd_cabang' => $cabang->kd_cabang, 
		'no_ruang' => show_no_ruang(), 
		'no_ruang_2' => get_no_ruang(),
		'grup'=>$CI->karyawan_model->get_grupuser($CI->session->userdata('nip')),
		'arr_kojab'=>$CI->karyawan_model->get_kodejabatan(),
		'email'=>$CI->session->userdata('email_bsi'),
		'kode_jabatan'=>$CI->session->userdata('kode_jabatan'), */
	);
	return $user_info;
}
