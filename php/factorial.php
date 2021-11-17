<?php
function factorial(int $n): int {
    $result = 1;
    if($n < 0 ||  $n > 12) throw new RangeException();
    for ($i=$n; $i > 0; $i--) { 
        $result *= $i;
    }
    return $result;
}
