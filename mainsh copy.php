<?php
require_once("vendor/autoload.php");
//دزیاقت اطلاعات
class tjgu{
  public $apid, $ss, $type;

  function __construct($apid, $ss, $type) {
    $this->apid = $apid;
    $this->ss = $ss;
    $this->type = $type;
  }

  public function im_load($url){
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

  public function fetchDataAndSave() {
    $sah = [[]];
    foreach($this->ss as $na => $k){
      $s = $this->im_load($this->apid.$k.'?order_dir=desc&market=index&lang=fa');
      $me = json_decode($s)->data;
      foreach($me[0] as $main){
        array_push($sah[0],$k);
      }
      foreach($me as $key => $value){
        $key++;
        if(empty($sah[$key])){
          $sah[$key]=[];
        }
        foreach($value as $valu){
          /*$w=count($sah[$key])-($na*6);
          echo $w;
          while($w>0){
            array_push($sah[$key],'');
            $w--;
          }*/
          array_push($sah[$key],$valu);
          /*preg_match_all('/<.*span>(.*)<.*span>/',$value[$i],$tedad );
          array_push($sah[$key],$tedad[1][0]);*/
        }
      }
    }

    $xlsx = \Shuchkin\SimpleXLSXGen::fromArray($sah, 'My books');
    $data = json_encode($sah);
    $dirjs='json/'.$this->type;
    $direx='excel/'.$this->type;
    if (!is_dir($dirjs)) {
        mkdir($dirjs, 0777, true); // The third parameter 'true' creates the directory recursively
    }
    if (!is_dir($direx)) {
        mkdir($direx, 0777, true); // The third parameter 'true' creates the directory recursively
    }
    file_put_contents('json/'.$this->type.'/'.$this->type.date("Y.m.d").'.json',$data);
    $xlsx->saveAs('excel/'.$this->type.'/'.$this->type.date("Y.m.d").'.xlsx');
  }
}
