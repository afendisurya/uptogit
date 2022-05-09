<?php

//include('include.php');

function fungsi_badan_atas($nama_sc, $nomor_versi) {

	$headers = array();
	//$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9.0; MI 8 SE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.119 Mobile Safari/537.36";
	//$headers[] = "Cookie: ".$Cookie;
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'http://ifconfig.co/json');
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	$hasil_curl = curl_exec($curl);
	curl_close($curl);

	$json = json_decode($hasil_curl, 1);
	$garis_dua = "\033[1;36m".str_repeat('=', 80)."\033[0m";
	$kotak_bantu = "\033[1;32m[~]\033[0m";
	$wm = "
   _______________      
  / ______   ___  |      \033[93mNama\t\t= $nama_sc \033[0m
 | (___    | |  | |      \033[93mVersi\t\t= $nomor_versi \033[0m
  \___ \   | |  | |      \033[96mDonasi\t\t= https://trakteer.id/banklink\033[0m
  ____) |  | |  | |____  \033[1;31mWarning\t= PROGRAM ILEGAL!!!\033[0m
 |_____/   |_|  |______| \033[93mTerima Kasih...\033[0m
  							
";
	
	echo ($wm)."";
	sleep(1);
	echo "$garis_dua\n";
		sleep(1);
	echo "$kotak_bantu \033[93mIP Address\t= ".$json['ip']."\n\033[0m";
		sleep(1);
	echo "$kotak_bantu \033[93mOperator\t= ".$json['asn_org']."\n\033[0m";
		sleep(1);
	echo "$kotak_bantu \033[93mLokasi\t= ".$json['country']." - ".$json['country_iso']."\n\033[0m";
		sleep(1);
	echo "$garis_dua\n";
		sleep(1);
}

function fungsi_judul($nama_skrip, $nomor_versi, $link_dukungan, $status_server) {
require_once('include.php');
global $garis_dua, $kotak_bantu, $spasi, $ganti_baris;

//	$headers = array();
	//$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9.0; MI 8 SE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.119 Mobile Safari/537.36";
	//$headers[] = "Cookie: ".$Cookie;
//	$curl = curl_init('http://ifconfig.co/json');
//	curl_setopt($curl, CURLOPT_URL, 'http://ifconfig.co/json');
//	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
//	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
//	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//	$hasil_curl = curl_exec($curl);
//	curl_close($curl);

//	$json = fungsi_parsing_json($hasil_curl);
$json = fungsi_info_jaringan();
	$wm = "
   ______________      
  / ______  ___  |      ".fungsi_teks_warna_kuning_terang('Nama')."\t\t".fungsi_teks_warna_kuning_terang('= '.$nama_skrip)."
 | (___   | |  | |      ".fungsi_teks_warna_kuning_terang('Versi')."\t\t".fungsi_teks_warna_kuning_terang('= '.$nomor_versi)."
  \___ \  | |  | |      ".fungsi_teks_warna_biru_gelap('Dukungan')."\t".fungsi_teks_warna_biru_gelap('= '.$link_dukungan)."
  ____) | | |  | |____  ".fungsi_teks_warna_merah_terang_tebal('Peringatan')."\t".fungsi_teks_warna_merah_terang_tebal('= AWAS!!! PROGRAM BOT!!!')."
 |_____/  |_|  |______| ".fungsi_teks_warna_kuning_terang('Server')."\t\t".fungsi_teks_warna_kuning_terang('= ').fungsi_status_server($status_server)."
  							
";
	
	echo $wm;
	sleep(1);

	echo $garis_dua."\n";

		sleep(1);
	echo $kotak_bantu.$spasi.fungsi_teks_warna_kuning_terang("IP Address\t= ".$json['ip'].$ganti_baris);
		sleep(1);
	echo $kotak_bantu.$spasi.fungsi_teks_warna_kuning_terang("Zona Waktu\t= ".$json['time_zone'].$ganti_baris);
		sleep(1);
	echo $kotak_bantu.$spasi.fungsi_teks_warna_kuning_terang("Lokasi\t= ".$json['country']." - ".$json['country_iso'].$ganti_baris);
		sleep(1);
	echo "$garis_dua\n";
		sleep(1);
}


?>