<?php

/*
 * Belajar Curl : Siri 3
 * Contoh 1
 *
 * http post
 * dalam contoh ini kita akan menggunakan option CURLOPT_POST = true untuk mengaktifkan
 * option POST.
 *
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://lab.ibnuyahya.com/belajar-curl/rest/input.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

curl_setopt($ch, CURLOPT_POST, TRUE);
$data = array(
    'param1' => 'Value 1',
    'param2' => 'Value 2'
);

//boleh juga ditulias sebagai string
//$data = "param1=Value 1&param2=Value 2";

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

curl_exec($ch);
curl_close($ch);