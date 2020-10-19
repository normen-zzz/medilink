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
$route['daftar-data-tindakan'] = 'master/master_medis';
$route['biaya-tindakan-perkelas'] = 'master/master_medis/biaya_tindakan';
$route['tarif-asuransi'] = 'master/master_medis/tarif_asuransi';
$route['diagnosa'] = 'master/master_medis/diagnosa';
$route['diagnosa-asuransi'] = 'master/master_medis/diagnosa_asuransi';
$route['asuransi'] = 'master/tindakan/asuransi';
$route['TarifAsuransi'] = 'master/tindakan/TarifAsuransi';
$route['tindakandiagnosa'] = 'master/master_medis/tindakan_diagnosa';
$route['nurse-station'] = 'master/medis/nurse';
$route['kelas'] = 'master/medis/kelas';
$route['kategori'] = 'master/medis/kategori';
$route['penunjang'] = 'master/medis/penunjang';
$route['kamar'] = 'master/medis/kamar';
$route['bed'] = 'master/medis/bed';
$route['visite'] = 'master/medis/visite';