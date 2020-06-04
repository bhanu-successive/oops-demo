<?php

require 'vendor/autoload.php';
use App\FloorCleaning;
//$floor = getopt(null, ["floor:"]);
$arg = getopt(null, ["area:", "floor:"]);


$robot = new FloorCleaning($arg['floor'], $arg['area']);
$robot->setCleaningInstance();
$robot->startCleaning();

?>
