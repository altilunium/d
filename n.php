<?php
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL ^ E_NOTICE);  

$a1=$_POST['a1'];

$theString = "";
$theString = $a1. " | " . get_client_ip()."\n\n";


$theString = urlencode($theString);
$theURL = "YOUR_MONITORING_SERVICES/sendMessage?payload=".$theString;
$a = file_get_contents($theURL);


function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
