<?php

/*
 * Belajar Curl : Siri 3
 * Contoh 3
 *
 * http put
 * dalam contoh ini kita akan menggunakan option CURLOPT_CUSTOMREQUEST = PUT untuk menghantar http PUT request
 *
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://lab.ibnuyahya.com/belajar-curl/rest/input.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
$data = "param1=Value 1&param2=Value 2";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

curl_exec($ch);
curl_close($ch);