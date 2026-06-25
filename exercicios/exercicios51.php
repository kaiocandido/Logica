<?php


function factors(int $number): array
{   

    $arrayFinal = [];

    for($i = 2; $number > 1;){
        
        if($number % $i == 0){
            $arrayFinal[] = $i;
            $result = $number / $i;
            $number = $result;
        }else {
            $i ++;
        }
    
    }

    return $arrayFinal;
}   

print_r(factors(3));