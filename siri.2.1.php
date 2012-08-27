<?php

/*
 * Belajar Curl : Siri 2
 * Contoh 1
 * 
 * follow location
 * Dengan enablekan CURLOPT_FOLLOWLOCATION , curl akan follow url location sehingga
 * location terakhir.
 *      contoh,
 *          bagi pengguna di malaysia, biasanya google akan redirect anda ke
 *          domain .my walaupun pada asalnya anda taip www.google.com di browser
 *
 *          http://www.google.com -- 302 moved to --> http://www.google.com.my
 *
 * Jika CURLOPT_FOLLOWLOCATION tidak di enable-kan ( false ), maka curl akan
 * return www.google.com sahaja. Untuk membolehkan curl follow url location,
 * kita perlu enablekan CURLOPT_FOLLOWLOCATION
 *
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.google.com/");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);


echo '<pre>';
        print_r(curl_getinfo($ch));
echo '</pre>';
curl_close($ch);