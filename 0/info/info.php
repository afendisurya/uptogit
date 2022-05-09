<?php

$kotak_bantu = fungsi_teks_warna_hijau_terang_tebal("[~]");

function fungsi_info($judul_info, $isi_info){
	global $warna_reset, $ganti_baris;
	$info = $ganti_baris.fungsi_teks_warna_hijau_terang_tebal('[info] ').fungsi_teks_warna_kuning_terang($judul_info."\t = $isi_info").$warna_reset.$ganti_baris;
	echo $info;
}

function fungsi_info_custom($nama_info, $isi_info){
	global $warna_reset, $ganti_baris;
	$info = $ganti_baris.fungsi_teks_warna_kuning_terang('['.$nama_info.'] ').fungsi_teks_warna_kuning_terang($isi_info).$warna_reset.$ganti_baris;
	echo $info;
}

function fungsi_info_jaringan(){
	$headers = array();
	//$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9.0; MI 8 SE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.119 Mobile Safari/537.36";
	//$headers[] = "Cookie: ".$Cookie;
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://ifconfig.co/json");
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	$hasil_curl = curl_exec($curl);
	curl_close($curl);
	//echo $hasil_curl."\n";
	//return $hasil_curl;
	$json = fungsi_parsing_json($hasil_curl);
	return $json;
}


?>