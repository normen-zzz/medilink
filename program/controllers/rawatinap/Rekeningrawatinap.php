<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekeningrawatinap extends MBELINK_Controller {
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
		$this->load->view('rawatinap/visite-dokter');
	}

	public function dpjp(){
		$this->load->view('rawatinap/dpjp');
	}

	public function tindakan(){
		$this->load->view('rawatinap/tindakan');
	}

	public function penunjang(){
		$this->load->view('rawatinap/penunjang');
	}

	public function lainlain(){
		$this->load->view('rawatinap/lain-lain');
	}

	public function gizipasien(){
		$this->load->view('rawatinap/gizipasien');
	}

	public function diagnosapasien(){
		$this->load->view('rawatinap/diagnosapasien');
	}

}
