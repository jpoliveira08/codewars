<?php

function toCamelCase($str){
    $newStr = str_split($str);

    for ($i=0; $i < strlen($str); $i++) { 
        if($newStr[$i] == "-" || $newStr[$i] == "_"){
            unset($newStr[$i]);
            $newStr = array_values($newStr);
            $newStr[$i] = strtoupper($newStr[$i]);
        }
    }
    return implode($newStr);
}

