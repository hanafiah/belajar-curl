<?php

/*
 * Belajar Curl : Siri 5
 * Contoh 1
 *
 * Menggunakan cookies dengan curl
 *
 * perhatian
 *      pastikan file cookie_file.txt adalah writable
 *
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://lab.ibnuyahya.com/belajar-curl/site1/process.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_POST, TRUE);
$data = array(
    'txtName' => 'ibnuyahya'
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$cookie = 'cookies/cookie_file.txt';
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);

$html = curl_exec($ch);
curl_close($ch);

//papar content
echo $html;