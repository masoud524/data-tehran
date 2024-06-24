<?php
require_once('mainm.php');
$apid = "https://api.tgju.org/v1/market/indicator/today-table-data/";
$ss =["geram18","geram24","ons","mesghal","gold_17","gold_mini_size","gold_world_futures","gold_17_transfer","gold_17_coin"];
$type = 'tala';

$sekeh = new tjgu($apid, $ss, $type);
$sekeh->fetchDataAndSave();
?>
