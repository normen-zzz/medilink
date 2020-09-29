<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MBELINK_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
		/* Set Timezone */
		date_default_timezone_set('Asia/Jakarta');		
		/* Cek Agent */
		$this->load->library('user_agent');
	/*	if(!$this->agent->is_mobile()):
			redirect('http://');
		endif; */
		/* Load Main Config */
		
		function tgl_format_id($tgl)
		{
			$hari_s = array('1' => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu');
			$bulan_s = array('1' => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
			$str_tgl = strtotime($tgl);
			$hari = $hari_s[date('N', $str_tgl)];
			$tanggal = date('d', $str_tgl);
			$bulan = $bulan_s[date('n', $str_tgl)];
			$tahun = date('Y', $str_tgl);
			$tgl = $hari.', '.$tanggal.' '.$bulan.' '.$tahun;
			return $tgl;
		}
		
		function tgl_id($tgl)
		{
			$hari_s = array('1' => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu');
			$bulan_s = array('1' => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
			$str_tgl = strtotime($tgl);
			$hari = $hari_s[date('N', $str_tgl)];
			$tanggal = date('d', $str_tgl);
			$bulan = $bulan_s[date('n', $str_tgl)];
			$tahun = date('Y', $str_tgl);
			//$tgl = $hari.', '.$tanggal.' '.$bulan.' '.$tahun;
			$tgl = $tanggal.' '.$bulan.' '.$tahun;
			return $tgl;
		}
		
		function tgl_id_short($tgl)
		{
			$hari_s = array('1' => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu');
			$bulan_s = array('1' => 'Jan', 'Feb', 'Mar', 'Aprl', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des');
			$str_tgl = strtotime($tgl);
			$hari = $hari_s[date('N', $str_tgl)];
			$tanggal = date('d', $str_tgl);
			$bulan = $bulan_s[date('n', $str_tgl)];
			$tahun = date('Y', $str_tgl);
			//$tgl = $hari.', '.$tanggal.' '.$bulan.' '.$tahun;
			$tgl = $tanggal.' '.$bulan.' '.$tahun;
			return $tgl;
		}
		
		function bulan_id($tgl)
		{
			//$hari_s = array('1' => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu');
			$bulan_s = array('1' => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
			$str_tgl = strtotime($tgl);
			$hari = $hari_s[date('N', $str_tgl)];
			$tanggal = date('d', $str_tgl);
			$bulan = $bulan_s[date('n', $str_tgl)];
			$tahun = date('Y', $str_tgl);
			//$tgl = $hari.', '.$tanggal.' '.$bulan.' '.$tahun;
			//$tgl = $tanggal.' '.$bulan.' '.$tahun;
			return $bulan;
		}
		
		function reverse_number_format($num)
		{
			if(strpos($num,'.') or strpos($num,',')){
				$num = (float)str_replace('.','', $num);
				return $num;
			}
			return $num;
		}
	}
	public function get_ua(){
		$this->load->library('user_agent');
		$ua = array(
			'browser'=>$this->agent->browser(), 
			'version'=>$this->agent->version(), 
			'mobile'=>$this->agent->mobile(), 
			'platform'=>$this->agent->platform(), 
			'robot'=>$this->agent->robot()
		);
		$uar = array(
			'agent_str'=>$this->agent->agent_string(), 
			'ua'=>$ua
		);
		return $uar;
	}
	
	
	
	public function setBulan($tgl)
	{
		
		$bulan_s = array('1' => 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des');
		$str_tgl = strtotime($tgl);		
		$bulan = $bulan_s[date('n', $str_tgl)];		
		$bln = $bulan;
		return $bln;
	}
	
	function tgl_now()
	{
		return mdate('%Y-%m-%d', time());
	}

	function jam_now()
	{
		return mdate('%H:%i:%s', time());
	}
	
	public function get_server_time()
	{
		date_default_timezone_set('Asia/Jakarta');
		// $this->data['tgl_today'] = date("F d, Y H:i:s", time());
		return date("Y-m-d H:i:s", time());
	}
}

class PUBLIK_Controller extends MBELINK_Controller {
	public function __construct()
	{
		parent::__construct();
		
		/* Jika sudah Login, arahkan ke Home Pendaftaran */
		if(! $this->session->userdata('nik')):
			redirect(base_url('login-system.html'));		
		endif;
	}
}
