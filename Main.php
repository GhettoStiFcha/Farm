<?php

require($_SERVER['PWD'] ."/vendor/autoload.php");

use Contracts\Logic;

$logic = new Logic();

$cows = ['0', '0', '0', '0', '0', '0', '0', '0', '0', '0'];
$chikens = ['0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'];

$result = $logic->start($cows, $chikens);

print_r($result);