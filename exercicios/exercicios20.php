<?php

function primos(){
    $contador = 200;
    $soma = 0;
    for ($i=100; $i<=$contador; $i++){
        if ($i % 5 == 0){
            $soma += $i;
        }
    }

    return $soma;
}

echo primos();