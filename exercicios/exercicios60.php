<?php

function find(int $needle, array $haystack): int
{
    $inicio = 0;
    $fim = count($haystack) - 1;

    
    while($inicio <= $fim){
        $meio = (int)(($inicio + $fim) / 2);
        $valorMeio = $haystack[$meio];

        if($valorMeio == $needle){
            return $meio;
        } elseif($valorMeio > $needle){
            $fim = $meio - 1;
        } else {
            $inicio = $meio + 1;
        }
    }

    throw new InvalidArgumentException("Valor não encontrado");
}