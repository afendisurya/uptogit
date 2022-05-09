<?php

// Server
require_once('include.php');

fungsi_reset();

fungsi_judul("uptogit", "1.0.0", "", "NON");


echo $ganti_baris;

// SSH
fungsi_info_custom("SSH", "Silahkan Masukan Lokasi FOLDER file SSH".fungsi_teks_warna_merah_terang_tebal(" TANPA NAMA FILE SSH!!! SSH HARUS SUDAH DI HUBUNGKAN KE GITHUB TERLEBIH DAHULU".$warna_reset));
echo $ganti_baris;

$variabel_lokasi_ssh = fungsi_input2($kotak_input." Masukan Lokasi SSH = ");
fungsi_info("Lokasi SSH", $variabel_lokasi_ssh);

$variabel_lokasi_ssh_2 = fungsi_nambah_karater_garis_miring($variabel_lokasi_ssh, "/");

fungsi_info("Lokasi SSH", $variabel_lokasi_ssh_2);


echo $ganti_baris;

$variabel_nama_ssh = fungsi_input2($kotak_input." Masukan Nama file SSH = ");
fungsi_info("Nama file SSH", $variabel_nama_ssh);

fungsi_info("Lokasi & Nama SSH", $variabel_lokasi_ssh_2.$variabel_nama_ssh);

// Cek SSH
fungsi_info_custom("Cek SSH", "");
fungsi_cek_ssh();
fungsi_info_custom("Muat SSH", "");
fungsi_ssh($variabel_lokasi_ssh_2.$variabel_nama_ssh);

// GIT
echo $ganti_baris;
$variabel_username_github = fungsi_input2($kotak_input." Username Github Anda = ");
$git = "www.github.com".$garis_miring.$variabel_username_github;
fungsi_info("Username Github", $git);

fungsi_info_custom("REPOSITORY", "Repository Harus Ada Terlebih Dahulu");
$variabel_repo_github = fungsi_input2($kotak_input." Masukan Repository Github Anda = ");
$git = $git.$garis_miring.$variabel_repo_github;
fungsi_info("Repository Github", $git);

// FOLDER
fungsi_info_custom("FOLDER", "Silahkan Masukan Lokasi Folder Yang Akan Di Upload".fungsi_teks_warna_merah_terang_tebal(" HANYA LOKASI FOLDER YANG MAU DI UPLOAD!!!".$warna_reset));

echo $ganti_baris;
$variabel_lokasi_folder = fungsi_input2($kotak_input." Masukan Lokasi Folder = ");
fungsi_info("Lokasi Folder", $variabel_lokasi_folder);

$variabel_lokasi_folder_2 = fungsi_nambah_karater_garis_miring($variabel_lokasi_folder, "/");

fungsi_info("Lokasi Folder", $variabel_lokasi_folder_2);

// CD
fungsi_info_custom("GANTI LOKASI", "");
fungsi_ganti_lokasi($variabel_lokasi_folder_2);
// LS
fungsi_info_custom("LS", "");
fungsi_daftar_berkas();
// git init
fungsi_info_custom("GIT INIT", "");
fungsi_git_init();



fungsi_info_custom("FILE", "Masukkan File Yang Akan Di Upload ".fungsi_teks_warna_merah_terang_tebal('PAKAI KARAKTER "." ATAU "*" UNTUK MEMASUKAN SEMUA FILE'));
$variabel_file = fungsi_input2($kotak_input." Masukan File = ");
// git add
fungsi_info_custom("GIT ADD", "");
fungsi_git_add($variabel_file);
// git status
fungsi_info_custom("GIT STATUS", "");
fungsi_git_status();

if ($variabel_file === ".") {
	fungsi_info("File", "SEMUA");
}elseif($variabel_file === "*") {
	fungsi_info("File", "SEMUA");
}
else {
	fungsi_info("File", $variabel_file);
}


fungsi_info_custom("BRANCH", fungsi_teks_warna_merah_terang_tebal("BRANCH HARUS SUDAH ADA"));
$variabel_branch = fungsi_input2($kotak_input." Masukan Tujuan Branch = ");
fungsi_info("Branch", $variabel_branch);
// git branch
fungsi_info_custom("GIT BRANCH", "");
fungsi_git_branch($variabel_branch);
// git log
fungsi_info_custom("GIT LOG", "");
fungsi_git_log();


fungsi_info_custom("GIT COMMIT", "Silahkan Tulis Pesan");
$variabel_catatan = fungsi_input2($kotak_input." Masukan Pesan Commit = ");
fungsi_info("Catatan", $variabel_catatan);
//git commit
fungsi_info_custom("GIT COMMIT", "");
fungsi_git_commit($variabel_catatan);
// git log
fungsi_info_custom("GIT LOG", "");
fungsi_git_log();
// git branch --list
fungsi_info_custom("GIT BRANCH", "");
fungsi_git_branch_0();


fungsi_info_custom("NAMA REMOTE", "Lebih Mudah Dengan Nama Repository");
$variabel_nama_remote = fungsi_input2($kotak_input." Masukan Nama Remote = ");
fungsi_info("Nama Remote", "$variabel_nama_remote");

fungsi_info_custom("ALAMAT REMOTE", "");
$variabel_alamat_remote = fungsi_alamat_remote($variabel_username_github, $variabel_repo_github);
fungsi_info("Alamat Remote", $variabel_alamat_remote);

fungsi_info_custom("GIT REMOTE", "");
$variabel_git_remote = fungsi_git_remote($variabel_nama_remote, $variabel_alamat_remote);

fungsi_info("GIT REMOTE ".$variabel_nama_remote, $variabel_alamat_remote);

// git remote show
fungsi_info_custom("GIT REMOTE SHOW", "");
fungsi_git_remote_show();

// git remote -v
fungsi_info_custom("GIT REMOTE -V", "");
fungsi_git_remote_v();
// git push
fungsi_info_custom("GIT PUSH", "PROSES UPLOAD...");
fungsi_git_push($variabel_nama_remote, $variabel_branch);

echo $ganti_baris;





?>