<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


$data = file_get_contents('https://blockchain.info/ticker');

$decode_data = json_decode($data);

$item = $decode_data->USD->last;

$ar = [ $item ];

$fp = fopen('mypath/file.csv', 'a+');

fputcsv($fp, $ar);

fclose($fp);







