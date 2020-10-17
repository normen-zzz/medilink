<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['tema'] = 'beranda';
$route['default_controller'] = 'masuk';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login-system'] = 'masuk';
$route['logout-system'] = 'masuk/logout';

//Master
$route['tambah-user'] = 'master/master';

//master-medis
$route['master-medis'] = 'master/master_medis';
$route['biaya-tindakan-perkelas'] = 'master/master_medis/biaya_tindakan';
$route['tarif-asuransi'] = 'master/master_medis/tarif_asuransi';
$route['diagnosa'] = 'master/master_medis/diagnosa';
$route['diagnosa-asuransi'] = 'master/master_medis/diagnosa_asuransi';
$route['tindakandiagnosa'] = 'master/master_medis/tindakan_diagnosa';
// End of Master Medis

// Rawat inap
$route['rawat-inap'] = 'master/rawat_inap';
$route['kelas'] = 'master/rawat_inap/kelas';
$route['kategori'] = 'master/rawat_inap/kategori';
$route['kamar'] = 'master/rawat_inap/kamar';
$route['bed'] = 'master/rawat_inap/bed';
$route['penunjang'] = 'master/rawat_inap/penunjang';
// End Of Rawat Inap