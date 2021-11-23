<?php

function rowSumOddNumbers($n)
{
    $sum = 0;
    $teste = array(array());
    $num = 1;
    for ($row=0; $row < $n; $row++) { 
        for ($col=0; $col <= $row; $col++) { 
            $teste[$row][$col] = $num;
            $num += 2;
            if($row == ($n - 1)){
                $sum += $teste[$row][$col];
            }
        }
    }
    return $sum;
}
