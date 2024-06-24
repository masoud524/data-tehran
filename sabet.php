<?php
require_once('main.php');
$apid="https://api.tgju.org/v1/stocks/instrument/history-data/";
$ss=["یاقوت","کیان","افران"];
$type = 'sabet';

$sekeh = new tjgu($apid, $ss, $type);
$sekeh->fetchDataAndSave();
