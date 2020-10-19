<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_medis extends MBELINK_Controller {
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
		$this->load->view('master/master_medis/master_medis_data_tindakan');
	}
	
	public function biaya_tindakan()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/master_medis/master_medis_biaya_tindakan');
	}

	public function diagnosa()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/master_medis/master_medis_diagnosa');
	}

	public function diagnosa_asuransi()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/master_medis/master_medis_diagnosaasuransi');
	}


	public function tindakan_diagnosa()
	{

		$this->load->view('master/master_medis/tindakan_diagnosa');
	}

	public function tarif_asuransi()
	{

		$this->load->view('master/master_medis/master_medis_tarif_asuransi');
	}
}
