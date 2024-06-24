<?php
require_once('mainm.php');
$apid = "https://api.tgju.org/v1/market/indicator/today-table-data/";
$ss =["silver_999","silver"];
$type = 'xug';

$sekeh = new tjgu($apid, $ss, $type);
$sekeh->fetchDataAndSave();
?>
