<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekeningrawatjalan extends MBELINK_Controller {
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
		$this->load->view('poliklinik/visite-dokter-poli');
	}

	public function dpjp_poli(){
		$this->load->view('poliklinik/dpjp-poli');
	}

	public function tindakan_poli(){
		$this->load->view('poliklinik/tindakan-poli');
	}

	public function operasi_poli(){
		$this->load->view('poliklinik/operasi-poli');
	}

	public function penunjang_poli(){
		$this->load->view('poliklinik/penunjang-poli');
	}

	public function lainlain_poli(){
		$this->load->view('poliklinik/lain-lain-poli');
	}

	public function gizipasien_poli(){
		$this->load->view('poliklinik/gizipasien-poli');
	}

	public function diagnosapasien_poli(){
		$this->load->view('poliklinik/diagnosapasien-poli');
	}

	public function administrasi_poli(){
		$this->load->view('poliklinik/administrasi-poli');
	}

}
