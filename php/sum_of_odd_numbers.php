<?php

function rowSumOddNumbers($n)
{
    $sum = 0;
    $teste = array(array());
    $num = 0;
    /**
     * Será a partir do n que saberemos a quantidade de linhas que esta matriz contem
     * A cada nova linha uma nova coluna sera adicionada
     * Os elementos serao ordenados da esqiuerda para direita
     */
    for ($row=0; $row < $n; $row++) { 
        for ($col=0; $col <= $n; $col++) { 
            if(oddNumber($num)){
                $teste[$row][$col] = $num;
                if($row == ($n - 1)){
                    $sum += $teste[$row][$col];
                }
                echo "linha: {$row} coluna: {$col} = {$num}" . PHP_EOL;
            }
            $num++;
        }
    }
    var_dump($teste);
    return $sum;
}
function oddNumber($number) : bool
{
    if($number % 2 !== 0){
        return true;
    }
    return false;
}
echo PHP_EOL;
echo rowSumOddNumbers(2);