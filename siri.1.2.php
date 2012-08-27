<?php

/*
 * Belajar Curl : Siri 1
 * Contoh 2
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.google.com/");
curl_exec($ch);
curl_close($ch);
