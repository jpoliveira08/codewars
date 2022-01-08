<?php

function rgb($r, $g, $b): string
{
    $hexString = implode(firstGroup($r));
    $hexString .= implode(firstGroup($g));
    $hexString .= implode(firstGroup($b));
    return strtoupper($hexString);
}
function firstGroup($value): array
{
    if ($value < 0) return ["0", "0"];

    $value = $value > 255 ? 255 : $value;

    $firstValue = dechex(floor($value / 16));
    $secondValue = dechex(floor($value % 16));

    return [$firstValue, $secondValue];
}
