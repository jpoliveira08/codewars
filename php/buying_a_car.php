<?php

declare(strict_types=1);

function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth): array
{
    $lossByMonth = $percentLossByMonth / 100;
    $countMonths = 0;
    $aSaved = 0;
    $acumulatePerMonth = 0;
    if ($startPriceOld >= $startPriceNew) return [0, round($startPriceOld - $startPriceNew)];

    while ($aSaved <= 0) {
        $acumulatePerMonth += $savingPerMonth;
        $aSaved = 0;
        $countMonths++;
        if($countMonths > 0 && $countMonths % 2 === 0){
            $lossByMonth += 0.005;
        }
        $startPriceOld *= (1 - $lossByMonth);
        $startPriceNew *= (1 - $lossByMonth);
        $aSaved += (-$startPriceNew) + $acumulatePerMonth + $startPriceOld;
    }
    
    return [$countMonths, round($aSaved)];
}

print_r(nbMonths(12000, 8000, 1000, 1.5));