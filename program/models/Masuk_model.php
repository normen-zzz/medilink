<?php
	class Masuk_model extends CI_Model {
		function __construct()
		{
			// Call the Model constructor
			parent::__construct();
			
			//$this->dbhost=$this->load->database('hospistar', TRUE);
					
			date_default_timezone_set('Asia/Jakarta');
		}
		
		public function getDataUserInfo($user)
		{
			$q=$this->db->get_where('karyawan1p', array('nik'=>$user));
			return $q->row();
		}
		
		/* 	public function cek_login($email, $passwd)
		{
			$this->db->select("nik, tgl_lahir");
			$this->db->where('nik', $email);
			$this->db->where('passwd', md5($passwd));
			$q = $this->db->get('karyawan1p');
			
			return $q->num_rows()>0?TRUE:FALSE;
		}
		 */
		public function getDataUser($user, $paswd)
		{
			$q=$this->db->get_where('users', array('nik'=>$user, 'password'=> md5($paswd)));
			return $q->row();
		}
		
		public function cek_login($email, $passwd)
		{
			$this->db->select("nik, DeptID");
			$this->db->where('nik', $email);
			$this->db->where('password', md5($passwd));
			$this->db->where('status', 'A');
			$q = $this->db->get('users');
			
			return $q->num_rows()>0?TRUE:FALSE;
		}
	}
