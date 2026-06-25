<?php

function sumOfMultiples(int $number, array $multiples)
{
    $arrayTest = [];

    for($i = 0; $i < count($multiples); $i++){

        if ($multiples[$i] == 0) {
            continue;
        }

        for($j = 1; $j < $number; $j++){
            if ($j % $multiples[$i] == 0){
                $arrayTest[] = $j;
            }
        }

    }

    $arrayTest = array_unique($arrayTest);
    $soma = 0;
    foreach($arrayTest as $array){
        $soma += $array;
    }

    return $soma;

}

sumOfMultiples(2, [1,2,3]);
