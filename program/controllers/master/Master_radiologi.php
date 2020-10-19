<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_radiologi extends MBELINK_Controller {
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
	
	public function radiologi()
	{
		//$this->load->view('welcome_message');
		$this->load->view('master/master_radiologi/radiologi');
    }
    
    public function biayaradiologi()
    {
        //$this->load->view('welcome_message');
		$this->load->view('master/master_radiologi/biayaradiologi');
    }
}
