<?php

$old = [
    1 => ["A", "E", "I", "O", "U"],
    2 => ["D", "G"],
    3 => ["B", "C", "M", "P"]
];


function transform(array $input): array
{
    $newArray = [];

    foreach ($input as $score => $letras){   
        $newArray[] =  $letras;
        foreach ($letras as $letra) {
            $newArray[strtolower($letra)] = $score;        
        }
    }
    return $newArray;
}


print_r(transform($old));