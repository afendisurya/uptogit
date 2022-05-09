<?php

function fungsi_countdown($var_fungsi_countdown_nilai_awal, $var_fungsi_countdown_nilai_akhir){
	for ($x = $var_fungsi_countdown_nilai_awal;$x > $var_fungsi_countdown_nilai_akhir;$x--){
	echo "Tunggu $x Detik Lagi \r";
	sleep (1);
}
}

function waktu_mundur($var_fungsi_countdown_nilai_awal, $var_fungsi_countdown_nilai_akhir){
	for ($x = $var_fungsi_countdown_nilai_awal;$x > $var_fungsi_countdown_nilai_akhir;$x--){
	echo "Tunggu $x Detik Lagi \r";
	sleep (1);
}
}

?>