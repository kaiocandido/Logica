<?php

function diamond(string $letter): array
{
    // Alfabeto para referência
    $letters = range('A', 'Z');

    // Encontrar a posição da letra fornecida
    $posicao = array_search(strtoupper($letter), $letters);

    // Total de linhas do diamante
    $numLinhas = $posicao * 2 + 1;

    $diamond = [];

    // Construção da metade superior
    for ($i = 0; $i <= $posicao; $i++) {
        $char = $letters[$i];

        // Espaços à esquerda para centralizar
        $espacosEsquerda = str_repeat(' ', $posicao - $i);

        // Espaços internos entre as letras
        $espacosInternos = $i === 0 ? '' : str_repeat(' ', $i * 2 - 1);

        // Linha formada
        $line = $espacosEsquerda . $char . $espacosInternos;
        if ($i > 0) $line .= $char;

        // Preencher espaços à direita para garantir largura uniforme
        $line = str_pad($line, $numLinhas, ' ', STR_PAD_RIGHT);

        $diamond[] = $line;
    }

    // Construção da metade inferior (simetria)
    for ($i = $posicao - 1; $i >= 0; $i--) {
        $diamond[] = $diamond[$i];
    }

    return $diamond;
}

// Exemplo de uso
$diamanteC = diamond("C");
foreach ($diamanteC as $linha) {
    echo $linha . "\n";
}