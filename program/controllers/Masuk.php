<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends MBELINK_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library(array('session'));//, 'Recaptcha'));
		$this->load->helper(array('rsonline'));
		
		// Cek Sesi
		/* if(! $this->session->userdata('nik')):
			redirect(base_url('login-system'), '');
		endif */;
			
		 
		// User Login Information
		$this->data['user'] = user_info();
		
	
		$this->load->model('masuk_model');
		//$this->load->model('info_model');
	}
	
	public function index()
	{
		
		$form = array(
			'label'=>'Login System',  
			'action'=>base_url('login-system.html'), 
			//'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
           // 'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
			'atr'=>array(
				'style'=>'font-size:0.9em', 
				'autocomplete'=>'off', 
			), 
			'set_rules'=>array(
				array(
					'field'=>'user', 
					'type'=>'text', 
					'label'=>'Masukan User', 
					//'rules'=>'required|valid_user', 
					'rules'=>'required', 
					'placeholder'=>'Insert NIK ', 
					'fas'=>'glyphicon-user', 
				), 
				array(
					'field'=>'passwd', 
					'type'=>'password', 
					'label'=>'Password', 
					'rules'=>'required|callback_cek_login', 
					'placeholder'=>'Insert password',
					'fas'=>'glyphicon-lock',					
				), 
			), 
			'tombol'=>array(
				'next'=>array(
					'class'=>'primary', 
					'label'=>'Login'
				), 
			), 
		);
		
		$this->form_validation->set_rules($form['set_rules']);
		//$this->form_validation->set_rules('g-recaptcha-response', '<strong>Captcha</strong>', 'callback_getResponseCaptcha');
		$this->form_validation->set_message('required', '%s Tidak Boleh Kosong...!');
		//$this->form_validation->set_message('valid_user', 'User ID Tidak Valid.');//<br>&nbsp;Contoh Valid: <strong>ardi.setia@gmail.com</strong>!');
		
		//$this->form_validation->set_message('numeric', '%s Hanya boleh diisi dengan angka.<br>&nbsp;Contoh Valid: <strong>087870965442</strong>!');
		$this->form_validation->set_message('cek_login', 'User ID dan/atau Password Tidak Sesuai!');
		//$this->form_validation->set_message('callback_getResponseCaptcha', '{field} {g-recaptcha-response} harus diisi. ');
		$this->form_validation->set_error_delimiters('<p style="color:#DE1D2D;font-weight:bold;">', '</p>');
		//$recaptcha = $this->input->post('g-recaptcha-response');
       // $response = $this->recaptcha->verifyResponse($recaptcha);
		$this->data['form'] = $form;
		
		if($this->form_validation->run() == FALSE):			
			$this->load->view('login', $this->data);
		else:
			$paswd = $this->input->post('passwd', TRUE);
			$email = $this->input->post('user', TRUE);
			
			$profil = $this->masuk_model->getDataUser($email, $paswd);
			$data_sesi = array(
				'nik'=>$profil->nik, 				
				'nama'=>$profil->namalengkap, 				
				'dept'=>$profil->deptID, 				
				'dokterid'=>$profil->DokterID,				
				
				//'grup'=>$this->info_model->get_grupuser($email),
				
			);
			$this->session->set_userdata($data_sesi);
			//$this->update_lastlogin($email, $hp);
			redirect(base_url('tema.html'));
		endif;
	}
		
	public function cek_login($passwd)
	{
		$email = $this->input->post('user', TRUE);
		return $this->masuk_model->cek_login($email, $passwd);
	}
	
	public function logout()
	{
		$this->session->sess_destroy();		
		redirect(base_url('login-system.html'));
	}
	
	public function getResponseCaptcha($str)
    {
        $this->load->library('recaptcha');
        $response = $this->recaptcha->verifyResponse($str);
        if ($response['success'])
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('getResponseCaptcha', '%s Harus di isi.' );
            return false;
        }
    }
}