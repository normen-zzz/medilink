<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tindakan extends MBELINK_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library(array('session')); //, 'Recaptcha'));
		$this->load->helper(array('rsonline'));
		// Cek Sesi
		if (!$this->session->userdata('nik')) :
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

	public function biaya()
	{
		$this->load->view('master/biaya_tindakan');
	}

	public function diagnosa()
	{
		$this->load->view('master/diagnosa');
	}
	public function asuransi()
	{
		$this->load->view('master/diagnosa_asuransi');
	}

	public function TarifAsuransi(){
		$this->load->view('master/tarif_asuransi');
	}

	public function TindakanDiagnosa(){
		$this->load->view('master/tindakan_diagnosa');
	}
}
