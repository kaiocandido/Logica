<?php

function isPrimo($number){

    for($i=2; $i<$number; $i++){
        $primo = $number % $i;
        if($primo == 0){
            return false;
        }
    }

    return true;
}

function prime(int $number)
{
    $count = 0;

    $numeroC = 1;

    if ($number <= 0){
        throw new Exception();
    }

    while($count < $number){
        $numeroC++;
        if(isPrimo($numeroC)){
            $count++;
        }
    }


    return $numeroC;
}
