<?php

function isArmstrongNumber(int $number): bool
{   
    $numberPorArray = str_split((string)$number);
    $tamanho = count($numberPorArray);    
    $result = 0;

    for($i=0; $i< $tamanho ; $i++){

        $result += $numberPorArray[$i] ** $tamanho;
    }

    echo $result;

    if ($result == $number){
        return true;
    }

    return false;
}


isArmstrongNumber(153);