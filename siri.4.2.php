<?php

/*
 * Belajar Curl : Siri 4
 * Contoh 2
 *
 * Pas web content ke dalam variable
 *
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ibnuyahya.com");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$html = curl_exec($ch);

curl_close($ch);

//papar content
echo $html;