<?php

function XO(string $s): bool
{
    $quantityOfO = substr_count(strtolower($s), 'o');
    $quantituOfX = substr_count(strtolower($s), 'x');
    if ($quantityOfO == $quantituOfX) {
        return true;
    }
    return false;
}





