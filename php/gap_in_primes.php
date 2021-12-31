<?php

function gap($g, $m, $n)
{
    $arrayOfPrimes = [];

    for ($i = $m; $i <= $n; $i++) {
        if (isPrime($i)) {
            array_push($arrayOfPrimes, $i);
        }
    }

    return checkGap($arrayOfPrimes, $g);
}

function checkGap(array $arrayOfPrimes, int $g)
{
    for ($i=0; $i < count($arrayOfPrimes) - 2; $i++) {
        if (($arrayOfPrimes[$i + 1] - $arrayOfPrimes[$i]) === $g) {
            return [$arrayOfPrimes[$i], $arrayOfPrimes[$i + 1]];
        }
    }
}

function isPrime($number)
{
    if ($number == 1)
    return 0;
     
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}


