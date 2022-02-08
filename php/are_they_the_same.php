<?php

function comp(?array $a1, ?array $a2): bool
{
    if (is_null($a1) || is_null($a2) || count($a1) != count($a2)) {
        return false;
    }
    $arraylength = count($a1);
    
    for ($i = 0; $i < $arraylength; $i++) {
        
        if (in_array(pow($a1[$i], 2), $a2)) {
            unset($a2[array_search(pow($a1[$i], 2), $a2)]);
            unset($a1[$i]);
        }
    }
    if (empty($a1) && empty($a2)) {
        return true;
    }

    return false;
}
