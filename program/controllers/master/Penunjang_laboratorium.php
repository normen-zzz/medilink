<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penunjang_laboratorium extends MBELINK_Controller {
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
		$this->load->view('master/penunjang_laboratorium/sample');
	}

	public function metode()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/penunjang_laboratorium/metode');
	}

	public function kategori()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/penunjang_laboratorium/kategori');
	}

	public function laboratorium()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/penunjang_laboratorium/master_data_laboratorium');
	}

}
