<?php

function solution($nums)
{
    if($nums == null || empty($nums)){
        return [];
    }
    quickSort($nums, 0, count($nums) - 1);
    return $nums;
}

function quickSort(&$array, $lowOrig, $highOrig)
{
    if(count($array) < 2){
        return;
    }
    $pivot = $array[($lowOrig + $highOrig) / 2];

    $low = $lowOrig;
    $high = $highOrig;

    while($low <= $high){
        while($array[$low] < $pivot){
            $low++;
        }

        while($array[$high] > $pivot){
            $high--;
        }
        if($low <= $high){
            $temp = $array[$low];
            $array[$low] = $array[$high];
            $array[$high] = $temp;

            $low++;
            $high--;
        }
    }

    if($lowOrig < $high){
        quickSort($array, $lowOrig, $high);
    }

    if($low < $highOrig){
        quickSort($array, $low, $highOrig);
    }
}

solution([5,8,3,1,6,2,4,9,7,5]);