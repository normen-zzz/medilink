<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penunjang_operasi extends MBELINK_Controller {
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
		$this->load->view('master/operasi/jenis-operasi');
	}

	public function item()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/operasi/item-operasi');
	}

	public function tarif()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/operasi/tarif-operasi');
	}

    public function tarif_perkelas()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/operasi/tarif-operasi-perkelas');
	}
}
