<?php

function nucleotideCount(string $input): array
{   

    $arrayFinal = [
        "A" => 0,
        "C" => 0,
        "G" => 0,
        "T" => 0
    ];

    

    $inputMin = strtolower($input);

    

    for($i = 0; $i<strlen($inputMin); $i++){
        if($inputMin[$i] == "a" ){
            $arrayFinal["A"]++;
        }else if($inputMin[$i] == "c" ){
            $arrayFinal["C"]++;
        }else if($inputMin[$i] == "g" ){
            $arrayFinal["G"]++;
        }else if($inputMin[$i] == "t" ){
            $arrayFinal["T"]++;
        }else {
             throw new InvalidArgumentException("Caracter inválido encontrado: {$inputMin[$i]}");
        }
    }

    return $arrayFinal;

}