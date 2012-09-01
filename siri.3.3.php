<?php

/*
 * Belajar Curl : Siri 3
 * Contoh 3
 *
 * http get
 *
 */
$ch = curl_init();

$data = "param1=Value 1&param2=Value 2";
curl_setopt($ch, CURLOPT_URL, "http://lab.ibnuyahya.com/belajar-curl/rest/input.php?{$data}");

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
curl_close($ch);