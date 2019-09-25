<?php
header('Content-Type: application/json; charset=UTF-8');
$json_string = 'https://ipnetcat.ddns.net:28443/json.htm?username=Z2V0ZGF0YQ==&password=Z2V0ZGF0YQ==&type=devices&rid=33';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata,true);
//print_r($obj);

$res = array();
$res['get_HardwareType'] = $obj["result"][0]['HardwareType'];
$res['get_ServerTime'] = $obj["ServerTime"];
$res['get_LastUpdate'] = $obj["result"][0]['LastUpdate'];
$res['get_Temp'] = $obj["result"][0]['Temp'];

echo json_encode($res);
?>
