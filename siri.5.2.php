<?php

/*
 * Belajar Curl : Siri 5
 * Contoh 2
 *
 * Menggunakan existing cookies dengan curl.
 *
 * peringatan
 *      Anda perlulah menjalankan siri.5.1.php terlebih dahulu sebelum jalankan kod ini
 *      bagi membolehkan fail cookies disimpan ke dalam 'cookies/cookie_file.txt'
 *
 *      anda boleh juga mengubah nilai terakhir didalam fail cookies tersebut untuk
 *      melihat impak kepada cookie ketika display
 *
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://rnd.local/curl/ibnuyahya/site1/welcome_cookies.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$cookie = 'cookies/cookie_file.txt';
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);

$html = curl_exec($ch);
curl_close($ch);

//papar content
echo $html;