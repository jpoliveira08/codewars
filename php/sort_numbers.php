<?php
/**
 * Sort of Quick Sort implementation
 */
function solution($nums) {

    quicksort($nums, 0, count($nums) - 1);
    
    return $nums;
}
function troca($nums, int $i, int $j){
    $aux= $nums[$i];
    $nums[$i] = $nums[$j];
    $nums[$j];
}
function particao($nums, int $p, int $r){
    $pivo = $nums[intval(($p+$r) / 2)];
    $i = $p - 1;
    $j = $r + 1;
    while($i < $j)
    {
        do{
            $j = $j - 1;
        }
        while($nums[$j] > $pivo);
        do{
            $i = $i + 1;
        }
        while($nums[$i] < $pivo);
        if($i < $j) troca($nums, $i, $j);
    }
    return $j;
}
function quicksort($nums, int $p, int $r)
{
    if($p < $r){
        $q = particao($nums, $p, $r);
        quicksort($nums, $p, $q);
        quicksort($nums, $q+1, $r);
    }
}

echo solution([5,8,3,1,6,2,4,9,7,5]);