<?php
require __DIR__ . '/vendor/composer/autoload_psr4.php';
require __DIR__ . '/app/CleaningService.php';

//$floor = getopt(null, ["floor:"]);
$arg = getopt(null, ["area:", "floor:"]);


$robot = new \App\CleaningService($arg['floor'], $arg['area']);

?>
