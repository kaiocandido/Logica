<?php

function primo($number){
    $cont = 0;

    for($i = 1; $i< $number; $i++){
        
        if($number % $i == 0){
            $cont++;
        }
    }

    if($cont > 2){
        return "Numero não é primo";
    }

    return "Numero é primo";
}


echo primo(2);
