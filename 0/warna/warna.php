<?php

// WARNA TULISAN
$warna_reset = "\033[0m";
$warna_isi_hijau_terang = "\033[1;32m";
$warna_isi_hijau_gelap = "\033[32m";
$warna_isi_oren_gelap = "\033[33m";
$warna_isi_kuning_terang = "\033[93m";
$warna_isi_merah_terang = "\033[1;31m";
$warna_isi_biru_laut_terang = "\033[1;36m";
$warna_isi_biru_gelap = "\033[96m";
$warna_isi_ungu_terang = "\033[1;35m";
$warna_isi_ungu_gelap = "\033[35m";

// WARNA BACKGROUND
$warna_luar_kuning_terang = "\033[103m";
$warna_luar_hijau_terang = "\033[102m";
$warna_luar_merah_gelap = "\033[41m";
$warna_luar_merah_terang = "\033[101m";

// TEBAL

$warna_isi_kuning_terang_tebal = "\033[1;93m";
$warna_isi_hijau_terang_tebal = "\033[1;32m";
$warna_isi_merah_terang_tebal = "\033[1;31m";

function fungsi_teks_warna_merah_terang_tebal($a){
	global $warna_reset, $warna_isi_merah_terang_tebal;
	$teks = $warna_isi_merah_terang_tebal.$a.$warna_reset;
	return $teks;
}

function fungsi_teks_warna_biru_gelap($a){
	global $warna_reset, $warna_isi_biru_gelap;
	$teks = $warna_isi_biru_gelap.$a.$warna_reset;
	return $teks;
}


function fungsi_teks_warna_kuning_terang($a){
	global $warna_reset, $warna_isi_kuning_terang;
	$teks = $warna_isi_kuning_terang.$a.$warna_reset;
	return $teks;
}

function fungsi_teks_warna_ungu_gelap($a){
	global $warna_reset, $warna_isi_ungu_gelap;
	$teks = $warna_isi_ungu_gelap.$a.$warna_reset;
	return $teks;
}

function fungsi_teks_warna_ungu_terang($b){
	global $warna_reset, $warna_isi_ungu_terang;
	$teks = $warna_isi_ungu_terang.$b.$warna_reset;
	return $teks;
}

function fungsi_teks_warna_hijau_terang_tebal($x){
global $warna_isi_hijau_terang_tebal, $warna_reset;
$teks = $warna_isi_hijau_terang_tebal.$x.$warna_reset;
return $teks;
}

/* NOTE



XXX[1;XXm] = 1 -> TEBAL

*/
?>