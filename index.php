<?php
require_once "class-date-helper.php"

$now = new \DateTime(DateHelper::now(),wp_timezone());
$start_date = clone $now;
$start_date = $start_date->sub(new \DateInterval('P1D'));
$start_datetime = $start_date->format('Y-m-d H:i:s');

var_dump($start_datetime);