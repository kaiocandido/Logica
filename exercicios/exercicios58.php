<?php

function squareRoot(int $number): int
{
    $result = 0;

    for($i = 1; $i <= $number; $i++){
        $test = $i * $i;
        if ($number == $test){
            $result += $i;
        }
    }

    return $result;
}


echo squareRoot(81);