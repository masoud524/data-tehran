<?php
$a=[];
$file = fopen('sekkenaghdi1_5_CHARTIX.txt', 'r');
if ($file) {
    while (($line = fgets($file)) !== false) {
        // انجام عملیات مورد نیاز بر روی هر خط
        $line = trim($line);
        $as='['.$line.']';
        if (!empty(json_decode($as))) {
        $a[]=json_decode($as);
        }
    }
    fclose($file);
}
echo json_encode($a);
require_once("vendor/autoload.php");

$xlsx =Shuchkin\SimpleXLSXGen::fromArray( $a, 'My books' );
$xlsx->saveAs('am'.date("Y.m.d").'.xlsx');