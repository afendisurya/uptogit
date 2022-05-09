<?php

function fungsi_curl_post($url, $Cookie, $data){
	$headers = array();
	$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9.0; MI 8 SE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.119 Mobile Safari/537.36";
	$headers[] = "Cookie: ".$Cookie;
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	$hasil_curl = curl_exec($curl);
	curl_close($curl);
	//echo $hasil_curl."\n";
	return $hasil_curl;
}

function fungsi_curl_info($url){
	$headers = array();
	//$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9.0; MI 8 SE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.119 Mobile Safari/537.36";
	//$headers[] = "Cookie: ".$Cookie;
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	$hasil_curl = curl_exec($curl);
	curl_close($curl);
	//echo $hasil_curl."\n";
	return $hasil_curl;
	
}

function fungsi_curl_get($url, $Cookie){
	$headers = array();
	$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9.0; MI 8 SE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.119 Mobile Safari/537.36";
	$headers[] = "Cookie: ".$Cookie;
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	$hasil_curl = curl_exec($curl);
	curl_close($curl);
//	echo $hasil_curl."\n";
	return $hasil_curl;
	
}

?>