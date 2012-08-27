<?php

/*
 * Belajar Curl : Siri 1
 * Contoh 2
 *
 * Melakukan http get menggunakan set option CURLOPT_URL
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.google.com/");
curl_exec($ch);
curl_close($ch);
