<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmasi extends MBELINK_Controller {
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
	
	public function penjualan()
	{
		//$this->load->view('welcome_message');
		$this->load->view('farmasi/penjualan_obat');
    }
    
    public function pembelian()
    {
        //$this->load->view('welcome_message');
		$this->load->view('farmasi/pembelian_obat');
    }
	
	public function data_obat()
    {
        //$this->load->view('welcome_message');
		$this->load->view('farmasi/data_obat');
    }
}
