<?php

require_once "vendor/autoload.php";

use Core\{Car, Bmw};
$bmw = new Bmw();
$maxSpeed = $bmw->get();
echo $maxSpeed;
