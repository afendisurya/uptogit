<?php

function fungsi_shortlink_duitcc($link_yang_dipendekkan, $Cookie){
		$headers = array();
		$data = '-----------------------------35557102559084682152745284216
Content-Disposition: form-data; name="url"

'.$link_yang_dipendekkan.'
-----------------------------35557102559084682152745284216--'
	$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9.0; MI 8 SE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.119 Mobile Safari/537.36";
	$headers[] = "Cookie: ".$Cookie;
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL,'https://duit.cc/ajax/shortlink.php');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	$hasil_curl = curl_exec($curl);
	curl_close($curl);
	//echo $hasil_curl."\n";
	return $hasil_curl;
	
}

?>