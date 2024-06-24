<?php
require_once('main.php');
$apid="https://api.tgju.org/v1/stocks/instrument/history-data/";
$ss=["شتاب","ارزش","اهرم"];
$type = 'saham';

$sekeh = new tjgu($apid, $ss, $type);
$sekeh->fetchDataAndSave();

