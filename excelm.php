<?php
function im_load($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,array("User-Agent:Mozilla/5.01 (Windows NT 6.2; Win64; x64; rv:59.0) Gecko/2011 Firefox/59.01","Accept-language: en-US,en;q=0.9,fa;q=0.8"));
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_TIMEOUT,30);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if(curl_error($ch)){
      die(curl_error($ch));
    }
    curl_close($ch);
    return $data;
  }
require_once("vendor/autoload.php");
$apid="https://api.tgju.org/v1/market/indicator/today-table-data/";
$ss=['sekee','ons','mesghal'];
$sah = [[]];
foreach($ss as $k){
  $s =im_load($apid.$k);
  $me = json_decode($s)->data;
  //echo $sa;
array_push($sah[0],$k,$k,$k,$k);
foreach($me as $key => $value){
     //$sa = array();
     $key++;
     if(empty($sah[$key])){
      $sah[$key]=[];
     }
     array_push($sah[$key],$value[0]);
     for($i= 1; $i<4; $i++){
     array_push($sah[$key],$value[$i]);
    }
   // var_dump($sa); 
     //array_push($sah, $sa);
    
    }
}

print_r($sah);
$xlsx =Shuchkin\SimpleXLSXGen::fromArray( $sah, 'My books' );
$xlsx->saveAs('arz'.date("Y.m.d").'.xlsx');