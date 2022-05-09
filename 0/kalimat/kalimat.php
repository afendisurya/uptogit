<?php

$ganti_baris = "\n";
$spasi = " ";
$titik_dua = ":";

function fungsi_tes($target){
	global $ganti_baris;
	echo $ganti_baris;
	fungsi_inf_custom("Tes", "target");
}
function fungsi_status_server($x){
	if (preg_match('/"Tidak Aktif"|Offline|Luring|Mati|Down/i', $x)) {
	$status = fungsi_teks_warna_merah_terang_tebal($x);
return $status;
}elseif (preg_match('/Aktif|Online|Daring|Hidup|Up/i', $x)) {
	$status = fungsi_teks_warna_hijau_terang_tebal($x);
	return $status;
}elseif(preg_match('/"Tanpa Server"|Serverless|NON|/i', $x)){
	$status = fungsi_teks_warna_kuning_terang($x);
	return $status;
}
}

function fungsi_nambah_karater_garis_miring($target_variabel, $target_karakter){
	if(!str_ends_with($target_variabel, $target_karakter)){
		$target_variabel = $target_variabel.$target_karakter;
		return $target_variabel;
	}else{
		$target_variabel = $target_variabel;
		return $target_variabel;
	}
}


?>