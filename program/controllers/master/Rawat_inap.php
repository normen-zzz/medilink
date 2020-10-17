<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat_inap extends MBELINK_Controller {
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
		$this->load->view('master/nurse');
	}

	public function kategori()
	{
		$this->load->view('master/kategori');
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

	public function penunjang(){
		$this->load->view('master/rawat_inap/penunjang');
	}
}
