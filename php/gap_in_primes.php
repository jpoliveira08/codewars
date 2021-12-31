<?php

declare (strict_types = 1);

function gap($g, $m, $n): ?array
{
    $arrayOfPrimes = [];

    for ($i = $m; $i <= $n; $i++) {
        if (isPrime($i)) {
            array_push($arrayOfPrimes, $i);
        }
    }

    return checkGap($arrayOfPrimes, $g);
}
print_r(gap(10,300,400));
function checkGap(array $arrayOfPrimes, int $g): ?array
{
    for ($i=0; $i < count($arrayOfPrimes) - 2; $i++) {
        if (($arrayOfPrimes[$i + 1] - $arrayOfPrimes[$i]) === $g) {
            return [$arrayOfPrimes[$i], $arrayOfPrimes[$i + 1]];
        }
    }
}

function isPrime(int $number): bool
{
    $cont = 0;
    for ($i=$number; $i > 0; $i--) { 
        if ($number % $i === 0) {
            $cont++;
        }
    }
    if ($cont === 2) {
        return true;
    }
    return false;
}

