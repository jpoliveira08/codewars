<?php

declare (strict_types = 1);

function gap($g, $m, $n): ?array
{
    for ($i=$m; $i <= $n - $g; $i++) { 
        $cont = 0;
        for ($j = ($i + $g); $j >= $i; $j--) { 
            if (isPrime($j)) {
                $cont++;
            }
        }
        if ($cont === 2 && isPrime($i) && isPrime($i + $g)) {
            return [$i, ($i + $g)];
        }

    }
    return null;
}
print_r(gap(10, 300, 400));
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

