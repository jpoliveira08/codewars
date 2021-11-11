<?php
function solution ($roman)
{
    $number = 0;
    $arrayToConvert = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 100
    ];
    $romanToInt = array();

    for ($i=0; $i < strlen($roman); $i++) { 
        if(isset($arrayToConvert[$roman[$i]])){
            array_push($romanToInt, $arrayToConvert[$roman[$i]]);
        }
        if($i > 0 && $romanToInt[$i] > $romanToInt[$i - 1]){
            /**
             * Utilizamos o valor multiplicado por 2, pois a primeira subtração é devido a logica de menorMaior dos romanos
             * E a segunda subtração é devido ao else abaixo, inserir os elementos "Cegamente"
             */
            
            $number += $romanToInt[$i] - (2 * $romanToInt[$i - 1]);
        }
        else{
            $number += $romanToInt[$i];
        }
    }
    return $number;
}

