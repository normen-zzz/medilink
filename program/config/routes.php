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
$route['tindakan'] = 'master/tindakan';
$route['biaya'] = 'master/tindakan/biaya';
$route['diagnosa'] = 'master/tindakan/diagnosa';
$route['asuransi'] = 'master/tindakan/asuransi';
$route['TarifAsuransi'] = 'master/tindakan/TarifAsuransi';
$route['TindakanDiagnosa'] = 'master/tindakan/TindakanDiagnosa';
$route['nurse-station'] = 'master/medis/nurse';
$route['kelas'] = 'master/medis/kelas';
$route['kategori'] = 'master/medis/kategori';
$route['penunjang'] = 'master/medis/penunjang';
$route['kamar'] = 'master/medis/kamar';
$route['bed'] = 'master/medis/bed';