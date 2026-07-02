<?php

function pascalsTriangleRows(int $rowCount)
{
    // array que vai guardar todas as linhas do triângulo
    $result = [];

    // loop que roda uma vez para cada linha do triângulo
    for($i = 0; $i < $rowCount; $i++){

        // a primeira linha sempre é [1]
        if($i == 0){
            $result[] = [1];
        } else {

            // pega a linha anterior para usar como base de cálculo
            $linhaAnterior = $result[$i - 1];

            // toda linha começa com 1
            $novaLinha = [1];

            // loop que calcula os valores do meio (ignora primeiro e último)
            for($j = 1; $j < count($linhaAnterior); $j++){
                // soma o elemento à esquerda e à direita da linha anterior
                $novaLinha[] = $linhaAnterior[$j - 1] + $linhaAnterior[$j];
            }

            // toda linha termina com 1
            $novaLinha[] = 1;

            // adiciona a linha montada no resultado final
            $result[] = $novaLinha;
        }
    }

    // retorna o triângulo completo
    return $result;
}
