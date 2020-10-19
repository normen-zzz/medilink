<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gizi extends MBELINK_Controller {
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
		$this->load->view('master/gizi/bahan');
    }
    
    public function type(){
        $this->load->view('master/gizi/type');
    }

    public function gizi(){
        $this->load->view('master/gizi/gizi');
	}

	public function kelas(){
        $this->load->view('master/gizi/kelas');
    }
	
	public function detail(){
        $this->load->view('master/gizi/detail');
    }
}
