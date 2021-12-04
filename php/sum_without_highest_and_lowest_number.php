<?php

function sumArray($array) {
    if(empty($array) || count($array) == 1){
        return 0;
    }
    $auxHighest = $array[0];
    $auxLowest = $array[0];
    $sum = 0;
    foreach ($array as $value) {
        if($value > $auxHighest){
            $auxHighest = $value;
        }
        if($value < $auxLowest){
            $auxLowest = $value;
        }
        $sum += $value;
    }
    return $sum - $auxHighest - $auxLowest;
}
