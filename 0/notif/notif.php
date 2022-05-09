<?php

function fungsi_notif_perhatian($isi_judul, $isi_notif){
//include('0/warna/warna.php');
//include('0/garis/garis.php');
//include('0/waktu/waktu.php');
	$a = "\n".$waktu_sekarang.$warna_isi_kuning_terang_tebal." $isi_judul \t= $isi_notif".$warna_reset;
	//echo "\n".$garis_dua;
	echo $a;
	//echo "\n".$garis_dua;
}

function fungsi_notif_berhasil($isi_judul, $isi_notif){
//include('0/warna/warna.php');
//include('0/garis/garis.php');
//include('0/waktu/waktu.php');
$a = "\n".$waktu_sekarang.$warna_isi_hijau_terang_tebal." $isi_judul \t= $isi_notif".$warna_reset;
//	echo "\n".$garis_dua;
	echo $a;
//	echo "\n".$garis_dua;
}

function fungsi_notif_gagal($isi_judul, $isi_notif){
//include('0/warna/warna.php');
//include('0/garis/garis.php');
//include('0/waktu/waktu.php');
$a = "\n".$waktu_sekarang.$warna_isi_merah_terang_tebal." $isi_judul \t= $isi_notif".$warna_reset;
//	echo "\n".$garis_dua;
	echo $a;
//	echo "\n".$garis_dua;
}

?>