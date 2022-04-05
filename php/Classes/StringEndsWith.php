<?php

namespace Codewars\Classes;

class StringEndsWith
{
    public function solution($str, $ending)
    {
        if(empty($ending)){
            return true;
        }
        if(strlen($ending) > strlen($str)){
            return false;
        }
        $count= 0;
        $invertedLetterPositionToCompare = 1;
        for ($i = strlen($ending) - 1; $i >= 0; $i--) {
            if ($ending[$i] == $str[strlen($str) - $invertedLetterPositionToCompare]) {
                $count++;
            }
            $invertedLetterPositionToCompare++;
        }
        if ($count === (strlen($ending))) {
            return true;
        }
        return false;
    }
}
