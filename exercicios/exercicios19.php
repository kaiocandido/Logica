<?php

function getClassification(int $number): string
{
    if ($number <= 0){
        throw new InvalidArgumentException("is thrown");
    }

    $divisores = [];
    $soma = 0;
    for($i=1; $i < $number; $i++){
        if($number % $i == 0){
            $divisores[] = $i;
        }
    }

    foreach($divisores as $divisor){
        $soma += $divisor;

    }

    if($soma == $number){
        $final = "perfect";
    }else if ($soma > $number){
        $final = "abundant";
    }else if($soma < $number) {
        $final = "deficient";
    }

    echo $final;
    return $final;

}

getClassification(0);

