<?php
require_once('main.php');
$apid = "https://api.tgju.org/v1/market/indicator/summary-table-data/";
$ss =["price_dollar_rl","sana_sell_usd","nima_sell_usd","price_eur","bank_eur","price_gbp","bank_gbp","price_aed","bank_aed"];
$type = 'arz';

$sekeh = new tjgu($apid, $ss, $type);
$sekeh->fetchDataAndSave();
?>
