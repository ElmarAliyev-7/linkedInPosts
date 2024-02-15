<?php

use Core\Math;

require_once "vendor/autoload.php";

$math = new Math;
$vurma = $math->multiplication(2,3.4);
$toplama = $math->addition(2,3.4);
print_r($vurma .  ' ' . $toplama);
