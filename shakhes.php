<?php
require_once('mainsh.php');
$apid="https://api.tgju.org/v1/stocks/instrument/history-data/";
$ss=["ش-کل-فرابورس","ش-قیمت-هم-وزن","ش-کل-بورس"];
$type = 'shakhes';

$sekeh = new tjgu($apid, $ss, $type);
$sekeh->fetchDataAndSave();

