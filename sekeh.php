<?php
require_once('main.php');
$apid = "https://api.tgju.org/v1/market/indicator/summary-table-data/";
$ss =["sekee","coin_blubber","sekeb","sekeb_blubber","nim","nim_blubber","rob","rob_blubber","gerami","gerami_blubber"];
$type = 'sekeh';

$sekeh = new tjgu($apid, $ss, $type);
$sekeh->fetchDataAndSave();
?>
