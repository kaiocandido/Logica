<?php

function total(array $items): int
{
    $total = 0;

    $precosPorGrupo = [
        1 => 800,
        2 => 1520,
        3 => 2160,
        4 => 2560,
        5 => 3000,
    ];

    $quantidades = [];

    foreach ($items as $livro) {
        if (!isset($quantidades[$livro])) {
            $quantidades[$livro] = 0;
        }

        $quantidades[$livro]++;
    }

    $grupos = [];

    while (array_sum($quantidades) > 0) {
        $tamanhoGrupo = 0;

        foreach ($quantidades as $livro => $quantidade) {
            if ($quantidade > 0) {
                $tamanhoGrupo++;
                $quantidades[$livro]--;
            }
        }

        $grupos[] = $tamanhoGrupo;
    }


    while (in_array(5, $grupos) && in_array(3, $grupos)) {
        $indiceGrupo5 = array_search(5, $grupos);
        $indiceGrupo3 = array_search(3, $grupos);

        $grupos[$indiceGrupo5] = 4;
        $grupos[$indiceGrupo3] = 4;
    }

    foreach ($grupos as $grupo) {
        $total += $precosPorGrupo[$grupo];
    }

    return $total;
}