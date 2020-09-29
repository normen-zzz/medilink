<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tarif extends MBELINK_CONTROLLER{
    public function __construct(){
        parent::__construct();

        $this->load->library(array('session'));
        $this->load->library(array('rsonline'));
        
        // cek sesi
        if (!$this->session->userdata('nik')) :
            redirect(base_url('login-system.html'), 'refresh');
        endif;
        // user information 
        $this->data['user'] = user_info();

        // $this->load->model('masuk_model');
		//$this->load->model('info_model');
    }

    public function index(){
        
    }
}