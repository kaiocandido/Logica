<?php

declare(strict_types=1);

function saddlePoints(array $matrix): array
{   
   
    $resultado = [];

    foreach ($matrix as $rowIndex => $row) {
        foreach ($row as $colIndex => $value) {
            $maiorDalinha = max($row);

            if ($value !== $maiorDalinha) {
                continue;
            }
            
            $colunaMatriz = [];

            foreach ($matrix as $linha) {
                $colunaMatriz[] = $linha[$colIndex];
            }
            $menorDaColuna = min($colunaMatriz);

            if ($value === $menorDaColuna) {
                $resultado[] = ["row" => $rowIndex, "column" => $colIndex];
            }
        }
}

    return $resultado;
}

