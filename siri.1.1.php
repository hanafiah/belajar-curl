<?php

/*
 * Belajar Curl : Siri 1
 * Contoh 1
 */
$ch = curl_init("http://www.google.com/");
curl_exec($ch);
curl_close($ch);
