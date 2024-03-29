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
$route['master-penunjang'] = 'master/rawat_inap/penunjang';
// End Of Rawat Inap

// Radiologi
$route['radiologi'] = 'master/Master_radiologi/radiologi';
$route['biayaradiologi'] = 'master/Master_radiologi/biayaradiologi';
// End Of Radiologi

// Master tarif visit dan konsul
$route['visite'] = 'master/Tarif_visitkonsul';
// End Of master visit dan konsul

// Master Gizi
$route['bahan'] = 'master/gizi';
$route['type'] = 'master/gizi/type';
$route['gizi'] = 'master/gizi/gizi';
$route['gizi-kelas'] = 'master/gizi/kelas';	
$route['gizi-detail'] = 'master/gizi/detail';
// End Of master Gizi



// Master penunjang laboratorium
$route['sample'] = 'master/penunjang_laboratorium';
$route['metode-laboratorium'] = 'master/penunjang_laboratorium/metode';
$route['kategori-laboratorium'] = 'master/penunjang_laboratorium/kategori';
$route['data-laboratorium'] = 'master/penunjang_laboratorium/laboratorium';
$route['group-pemeriksaan'] = 'master/penunjang_laboratorium/group_pem';
$route['harga-biaya'] = 'master/penunjang_laboratorium/harga_biaya';

// End Of master penunjang laboratorium

// Master penunjang operasi
$route['jenis-operasi'] = 'master/penunjang_operasi';
$route['item-operasi'] = 'master/penunjang_operasi/item';
$route['tarif-operasi'] = 'master/penunjang_operasi/tarif';
$route['tarif-operasi-perkelas'] = 'master/penunjang_operasi/tarif_perkelas';
// End Of master penunjang operasi
//Farmasi
$route['penjualan'] = 'farmasi/farmasi/penjualan';
$route['pembelian-obat'] = 'farmasi/farmasi/pembelian';
$route['data-obat'] = 'farmasi/farmasi/data_obat';
//End Farmasi
//Rawat inap
$route['visite-dokter'] = 'rawatinap/rekeningrawatinap';
$route['dpjp'] = 'rawatinap/rekeningrawatinap/dpjp';
$route['tindakan'] = 'rawatinap/rekeningrawatinap/tindakan';
$route['penunjang'] = 'rawatinap/rekeningrawatinap/penunjang';
$route['lain-lain'] = 'rawatinap/rekeningrawatinap/lainlain';
$route['gizipasien'] = 'rawatinap/rekeningrawatinap/gizipasien';
$route['diagnosapasien'] = 'rawatinap/rekeningrawatinap/diagnosapasien';
$route['administrasi'] = 'rawatinap/rekeningrawatinap/administrasi';
//End Rawat inap
//Poliklinik
$route['visite-dokter-poli'] = 'poliklinik/rekeningrawatjalan';
$route['dpjp-poli'] = 'poliklinik/rekeningrawatjalan/dpjp_poli';
$route['tindakan-poli'] = 'poliklinik/rekeningrawatjalan/tindakan_poli';
$route['operasi-poli'] = 'poliklinik/rekeningrawatjalan/operasi_poli';
$route['penunjang-poli'] = 'poliklinik/rekeningrawatjalan/penunjang_poli';
$route['lain-lain-poli'] = 'poliklinik/rekeningrawatjalan/lainlain_poli';
$route['gizipasien-poli'] = 'poliklinik/rekeningrawatjalan/gizipasien_poli';
$route['diagnosapasien-poli'] = 'poliklinik/rekeningrawatjalan/diagnosapasien_poli';
$route['administrasi-poli'] = 'poliklinik/rekeningrawatjalan/administrasi_poli';
//End Poliklinik









