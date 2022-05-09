<?php

$kotak_input = fungsi_teks_warna_hijau_terang_tebal("[").fungsi_teks_warna_merah_terang_tebal("input").fungsi_teks_warna_hijau_terang_tebal("]");

function fungsi_input($judul){
	$a = readline($judul);
	return $a;
}

function fungsi_input2($judul){
	echo $judul;
	$a = trim(fgets(STDIN));
	return $a;
}

?>