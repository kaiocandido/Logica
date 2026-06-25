<?php

function steps(int $number): int
{
    $cont = 0;
    while($number != 1){
        
        if ($number <= 0) {
            throw new InvalidArgumentException("Only positive integers are allowed.");
        }    
        else if ($number % 2 == 0){
            $number = $number / 2;
        }else if ($number % 2 == 1){
            $number = ($number * 3) + 1;
        }
        $cont ++;
    }

    echo $cont;
    return $cont;
}


steps(12);