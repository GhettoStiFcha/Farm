<?php

$cows = ['0', '0', '0', '0', '0', '0', '0', '0', '0', '0'];
$milkedCows = [];

foreach($cows as $key => $value){
    $value = rand(8, 12);
    array_push($milkedCows, $value);
}

print_r($milkedCows);