<?php

require 'vendor/autoload.php';
use App\CleaningService;
//$floor = getopt(null, ["floor:"]);
$arg = getopt(null, ["area:", "floor:"]);


$robot = new CleaningService($arg['floor'], $arg['area']);

?>
