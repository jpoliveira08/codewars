<?php

function invert(array $a): array {
    foreach ($a as $i => $value) {
        $a[$i] = $value * (-1);
    }
    return $a;
}
