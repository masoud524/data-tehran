<?php
require_once('main.php');
$apid="https://api.tgju.org/v1/stocks/instrument/history-data/";
$ss=["همای","پتروآگاه","عیار"];
$type = 'mix';

$sekeh = new tjgu($apid, $ss, $type);
$sekeh->fetchDataAndSave();

