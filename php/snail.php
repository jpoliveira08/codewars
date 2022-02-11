<?php

function snail(array $array)
{
    if (empty($array)) {
        return [];
    }
    $snailToLine = [];

    return $snailToLine;
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

function removeEdges(array $array): array
{

    return ;
}
$teste =[
            [2, 3],
            [9, 4],
        ];

print_r(snail($teste));