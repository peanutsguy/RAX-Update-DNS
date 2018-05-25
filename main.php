<?php

function get_ip(){
	$url = "http://ip-api.com/json";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$result = curl_exec($ch);
	$adata = json_decode($result,true);
	$ip = $adata["query"];

	return $ip;
}



$csv = "domains.csv";

$ip = get_ip();

?>
