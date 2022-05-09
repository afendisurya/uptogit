<?php

function fungsi_git_init(){
	system('git init');
}

function fungsi_alamat_remote($username, $repo){
	global $garis_miring, $titik_dua;
	$a = "git@github.com".$titik_dua.$username.$garis_miring.$repo.".git";
	return $a;
}

function fungsi_git_remote($nama_remote, $alamat_remote){
	$a = system("git remote add $nama_remote $alamat_remote");
	return $a;
}

function fungsi_git_remote_show(){
	system('git remote show');
}

function fungsi_git_remote_v(){
	system("git remote -v");
	
}

function fungsi_git_add($target){
	system('git add '.$target);
}

function fungsi_git_status(){
	system('git status');
}

function fungsi_git_branch($branch){
	system('git branch -M '.$branch);
}

function fungsi_git_log(){
	system('git log');
}

function fungsi_git_branch_0(){
	system('git branch');
}

function fungsi_git_commit($pesan){
	system('git commit -m '.$pesan);
}

function fungsi_git_push($nama_remote, $branch){
	$a = system("git push -u ".$nama_remote." ".$branch);
	return $a;
}




?>