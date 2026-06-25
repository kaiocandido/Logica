<?php


function diamond(string $letter): array
{
    $letters = range('A', 'Z');

    $posicao = array_search(strtoupper($letter), $letters);

    $numLinhas = $posicao * 2 + 1;

    $diamond = []; 

    for ($i = 0; $i <= $posicao; $i++) {
        $char = $letters[$i]; 

        $espacosEsquerda = str_repeat(' ', $posicao - $i);

        $espacosInternos = $i === 0 ? '' : str_repeat(' ', $i * 2 - 1);

        $line = $espacosEsquerda . $char;
        if ($i > 0) {
            $line .= $espacosInternos . $char;
        }

        $diamond[] = $line; // Adiciona a linha ao array
    }

    for ($i = $posicao - 1; $i >= 0; $i--) {
        $diamond[] = $diamond[$i];
    }

    return $diamond;
}

$diamante = diamond('E');
foreach ($diamante as $linha) {
    echo $linha . "\n";
}