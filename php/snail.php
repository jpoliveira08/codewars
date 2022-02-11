<?php

function snail(array $array): array
{
    if (empty($array) || empty($array[0])) {
        return [];
    }
    $snailToLine = [];
    $snailToLine = recursive($array);
    if (count($array) < 3) {
        return $snailToLine;
    }
    $combined = [];

    if ((count(teste($array)) > 0)) {
        $combined = array_merge($snailToLine, snail(teste($array)));
    }

    return $combined;
}

function teste($array): array
{
    $newArray = [];
    $arrayLength = count($array);
    $tamanho = array_slice($array, 1, $arrayLength - 2);

    for ($i=0; $i < count($tamanho); $i++) { 
        for ($j=1; $j < count($tamanho[$i]) - 1; $j++) { 
            $newArray[$i][$j - 1] = $tamanho[$i][$j];
        }
    }
    return $newArray;
}
 
function recursive(array $array): array
{
    $firstArray = [];
    $lineLength = count($array);
    $columnLength = count($array[0]);

    for ($i=0; $i < $lineLength; $i++) { 
        for ($j=0; $j < $columnLength; $j++) { 
            if ($i == 0 && $j < ($columnLength - 1)) {
                array_push($firstArray, $array[$i][$j]);
            }
        }
        array_push($firstArray, $array[$i][($columnLength - 1)]);
    }
    for ($p = $lineLength - 1; $p > 0; $p--) {
        for ($q = $columnLength - 1; $q > 0; $q--) {
            if ($p == ($lineLength - 1) && $q < ($columnLength - 1)) {
                array_push($firstArray, $array[$p][$q]);
            }
        }
        if ($p < $lineLength){
            array_push($firstArray, $array[$p][$q]);
        }
    }

    return $firstArray;
}
