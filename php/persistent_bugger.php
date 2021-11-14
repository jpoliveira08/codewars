<?php

function persistence(int $num): int {
    $cont = 0;
    $numVet = str_split($num);
    $cond = true;
    if(strlen($num) == 1){
        return 0;
    }
    while($cond){
        $cont++;
        $mult = 1;
        foreach($numVet as $value){
            $mult *= $value;
        }
        if(strlen($mult) == 1){
            $cond = false;
            break;
        }
        $multVet = str_split($mult);
        $numVet = $multVet;
    }
    return $cont;
}
