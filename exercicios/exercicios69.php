<?php

declare(strict_types=1);

function degreeOfSeparation(array $familyTree, string $personA, string $personB): int
{
    $fila = [];
    $distancia = [];
    $visitados = [];

    $tamanhoFila = 0;
    $inicioFila = 0;
    $tamanhoVisitados = 0;

    $fila[0] = $personA;
    $distancia[0] = 0;
    $tamanhoFila = 1;

    $visitados[0] = $personA;
    $tamanhoVisitados = 1;

    while($inicioFila < $tamanhoFila){
        $atual = $fila[$inicioFila];
        $distanciaAtual = $distancia[$inicioFila];
        $inicioFila = $inicioFila + 1;

        if($atual == $personB){
            return $distanciaAtual;
        }

        foreach ($familyTree as $pai => $filhos) {
            $vizinhos = [];

            if ($pai == $atual) {
                $vizinhos = array_merge($vizinhos, $filhos);
            }

            if (in_array($atual, $filhos)) {
                $vizinhos[] = $pai;

                foreach ($filhos as $irmao) {
                    if ($irmao != $atual) {
                        $vizinhos[] = $irmao;
                    }
                }
            }

            foreach ($vizinhos as $vizinho) {
                $jaVisitado = false;
                for ($j = 0; $j < $tamanhoVisitados; $j++) {
                    if ($visitados[$j] == $vizinho) {
                        $jaVisitado = true;
                    }
                }

                if ($jaVisitado == false) {
                    $visitados[$tamanhoVisitados] = $vizinho;
                    $tamanhoVisitados = $tamanhoVisitados + 1;

                    $fila[$tamanhoFila] = $vizinho;
                    $distancia[$tamanhoFila] = $distanciaAtual + 1;
                    $tamanhoFila = $tamanhoFila + 1;
                }
            }
        }
    }
    
    return -1;

}
