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
$apid="https://www.cbi.ir/PolicyRates/policyrates_fa.aspx";
$sa =im_load($apid);
echo $sa;
//$me = json_decode($sa)->data;
//$xlsx =Shuchkin\SimpleXLSXGen::fromArray( $me, 'My books' )->addSheet( $me )->addSheet( $me );
//$xlsx->saveAs('books2.xlsx');