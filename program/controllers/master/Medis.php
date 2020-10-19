<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medis extends MBELINK_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library(array('session'));//, 'Recaptcha'));
		$this->load->helper(array('rsonline'));
		// Cek Sesi
		if(! $this->session->userdata('nik')):
			redirect(base_url('login-system.html'), 'refresh');
		endif;		
		// User Login Information
		$this->data['user'] = user_info();
		
		//Ngaeng-ngaeng
		// $this->load->model('masuk_model');
		//$this->load->model('info_model');
	}
	
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/tindakan');
	}

	// public function biaya()
	// {
	// 	$this->load->view('master/biaya_tindakan');
	// }

	// public function diagnosa()
	// {
	// 	$this->load->view('master/diagnosa');
	// }

	// public function diagnosa_asuransi()
	// {
	// 	$this->load->view('master/diagnosa_asuransi');
	// }

	public function penunjang()
	{
		$this->load->view('master/penunjang');
	}

	public function kategori()
	{
		$this->load->view('master/kategori');
	}
	public function nurse()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/nurse');
	}

	public function kelas()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/kelas');
	}
	public function kamar()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/kamar');
	}
	public function bed()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/bed');
	}
	public function visite()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/visite');
	}

}
