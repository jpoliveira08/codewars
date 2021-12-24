<?php

function solution(string $str): array
{
    if(strlen($str) === 0){
        return [];
    }
    
    if(strlen($str) % 2 == 0){
        return str_split($str, 2);
    }

    return strOddsToArray($str);
}

function strOddsToArray(string $str) : array
{
    $strConvert = str_split($str, 2);
    $strConvert[count($strConvert) - 1] .= "_";

    return $strConvert;
}

print_r(solution("abc"));