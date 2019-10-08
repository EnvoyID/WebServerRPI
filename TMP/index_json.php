<?php
    header('Access-Control-Allow-Origin: *');
    $json_string = file_get_contents("ups.json");
    $obj = json_decode($json_string,true);
    print_r($obj);
 
    echo '<br>';
  
    $res = array();
    $res['Battery'] = $obj["Battery"];
    $res['Voltage'] = $obj["Voltage"];
    
    echo '<br>';
    echo '<br>';
    echo json_encode($res);

?>