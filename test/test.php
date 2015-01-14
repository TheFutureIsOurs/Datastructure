<?php
$duedate = '2014-09-25';
//$distance = 40-floor((strtotime($duedate)-strtotime(date('Y-m-d')))/(24*60*60*7));
$distance = ceil((strtotime($duedate)-time())/(24*60*60));
var_dump($distance);