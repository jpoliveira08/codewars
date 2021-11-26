<?php
/**
 * In the future i'll correct this solution
 * Sort of bubble sort implementation
 *
 */
function descendingOrder(int $n): int {
    //Passando a entrada para vetor
    $vetNum = str_split($n);
    $aux = 0;
    $teste = 0;
    for ($i=1; $i <= strlen($n); $i++) { 
        for ($j=0; $j < strlen($n) - 1; $j++) { 
            if($vetNum[$j] < $vetNum[$j+1]){
                $aux = $vetNum[$j];
                $vetNum[$j] = $vetNum[$j+1];
                $vetNum[$j+1] = $aux;
            }
        }
    }
    foreach($vetNum as $num){
        $teste .= $num;
    }
    return $teste;
}

echo descendingOrder(321);