<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends MBELINK_Controller {
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
		
    }
    
   
	
	public function group_pem(){
        $this->load->view('master/pendukung-laboraturium/group-pemeriksaan');
    }

    public function harga_biaya(){
        $this->load->view('master/pendukung-laboraturium/harga-biaya');
    }
}
