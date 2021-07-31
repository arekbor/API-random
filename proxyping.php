<?php

require_once("error_handler.php");

header("Expires: Wed, 23 Dec 1980 00:30:00 GMT");
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');

$num = 1;
$min = 1;
$max = 100;

$serverAddress = "https://www.random.org/integers/";
$serverParams = 'num='.$num .'&min='.$min.'&max='.$max.'&col=1&base=10&format=plain&rnd=new';

$randomNumber = file_get_contents($serverAddress.'?'.$serverParams);
echo $randomNumber;
