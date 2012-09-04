<?php

/*
 * Belajar Curl : Siri 5
 * Contoh 3
 *
 * Menggunakan CURLOPT_COOKIE dengan curl.
 *
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://lab.ibnuyahya.com/belajar-curl/site1/welcome_cookies.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch, CURLOPT_COOKIE, 'name=anak ayam');

$html = curl_exec($ch);
curl_close($ch);

//papar content
echo $html;