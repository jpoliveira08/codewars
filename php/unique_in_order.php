<?php

declare(strict_types=1);

function uniqueInOrder($iterable): array
{
    if(empty($iterable)) return [];
    $cont = 0;
    if (is_array($iterable)) {
        $ret = $iterable;
    } else {
        $ret = str_split($iterable);
    }
    $retN = [$ret[0]];
    for ($i=0; $i < count($ret); $i++) { 
        if($retN[$cont] !== $ret[$i]){
            array_push($retN, $ret[$i]);
            $cont++;
        }
    }
    return $retN;
}
