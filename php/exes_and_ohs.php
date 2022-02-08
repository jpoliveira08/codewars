<?php

/*
Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive.
The string can contain any char.

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false

*/
var_dump(XO('OOxooXXxxooOoxOoo'));
function XO(string $s): bool
{
    $s = strtolower($s);
    var_dump($s);
    if (!strpos($s, "o") && !strpos($s, "x")) {
        return true;
    }

    if (countO($s) == countX($s)) {
        return true;
    }
    return false;
}

function countO(string $s): int
{
    $contO = 0;
    for ($i=0; $i < strlen($s); $i++) { 
        if ($s[$i] == 'o') {
            $contO++;
        }
    }
    print_r($contO);
    return $contO;
}
function countX(string $s): int
{
    $contX = 0;
    for ($i=0; $i < strlen($s); $i++) { 
        if ($s[$i] == 'x') {
            $contX++;
        }
    }
    print_r($contX);
    return $contX;
}

