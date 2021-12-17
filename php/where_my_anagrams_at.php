<?php

function anagrams(string $word, array $words): array {
    $anagramsWords = []; 
    $arraySameSize = [];
    foreach($words as $oneWord){
        if(strlen($oneWord) == strlen($word)) array_push($arraySameSize, $oneWord);
    }
    for ($i=0; $i < count($arraySameSize); $i++) { 
        $cont = 0;
        for ($j=0; $j < strlen($word); $j++) { 
            if(str_contains($arraySameSize[$i], $word[$j]) && str_contains($word, $arraySameSize[$i][$j])) $cont++;
        }
        if($cont == strlen($word)){
            array_push($anagramsWords, $arraySameSize[$i]);
        }
    }
    return $anagramsWords;
}
