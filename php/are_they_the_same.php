<?php

function comp($a1, $a2) {
    $cont = 0;
      for ($i = 0; $i < count($a1); $i++) {
        for ($j = 0; $j < count($a2); $j++) {
          if ($a1[$i] == sqrt($a2[$j])) {
            $cont++;
          }
        }
      }
    if ($cont == count($a1)) {
      return true;
    }
    return false;
  }