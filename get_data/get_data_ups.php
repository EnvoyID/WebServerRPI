<?php
header('Content-Type: application/json; charset=UTF-8');
$json_string = 'https://ipnetcat.ddns.net/ups.json';
$jsondata = file_get_contents($json_string);
//print_r($json_string);

$obj = json_decode($jsondata,true);

    $res = array();
    $res['get_Battery'] = $obj['Battery'];
    $res['get_Voltage'] = $obj['Voltage'];

    echo json_encode($res);
?>
