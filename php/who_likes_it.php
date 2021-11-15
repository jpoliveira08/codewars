<?php

function likes( $names ) {
    $result = "";
    if(empty($names)){
        $result = "no one likes this";
    }
    else if(count($names) == 1){
        $result = "{$names[0]} likes this";
    }
    else if(count($names) == 2){
        $result = "{$names[0]} and {$names[1]} like this";
    }
    else if(count($names) == 3){
        $result = "{$names[0]}, {$names[1]} and {$names[2]} like this";
    }
    else{
        $total = count($names) - 2;
        $result = "{$names[0]}, {$names[1]} and {$total} others like this";
    }
    return $result;
}