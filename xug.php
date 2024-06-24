<?php
require_once('main.php');
$apid = "https://api.tgju.org/v1/market/indicator/summary-table-data/";
$ss =["silver_999","silver"];
$type = 'xug';

$sekeh = new tjgu($apid, $ss, $type);
$sekeh->fetchDataAndSave();
?>
