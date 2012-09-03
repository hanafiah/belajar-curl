<?php

/*
 * Belajar Curl : Siri 4
 * Contoh 1
 *
 * save web content menggunakan CURLOPT_FILE
 *
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ibnuyahya.com");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

$fh = fopen('dump/dumpfile.txt', 'w');
curl_setopt($ch, CURLOPT_FILE, $fh);
curl_exec($ch);

curl_close($ch);
fclose($fh);

//papar content
$html = file_get_contents('dump/dumpfile.txt');
echo $html;

