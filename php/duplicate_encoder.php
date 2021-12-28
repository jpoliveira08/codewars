<?php

declare(strict_types = 1);

function duplicate_encode(string $word): string
{
    $stringEncoded = '';
    strtolower($word);
    for ($i=0; $i < strlen($word); $i++) { 
        if (substr_count($word, $word[$i]) > 1) {
            $stringEncoded .= ')';
        } else {
            $stringEncoded .= '(';
        }

    }

    return $stringEncoded;
}
