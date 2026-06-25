<?php

function mdc(int $a, int $b): int
{
    while ($b !== 0) {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }

    return $a;
}

function encode(string $text, int $num1, int $num2): string
{
    if (mdc($num1, 26) !== 1) {
        throw new InvalidArgumentException('a and m must be coprime.');
    }

    $textMin = strtolower($text);

    $alfabeto = [
        0 => 'a',
        1 => 'b',
        2 => 'c',
        3 => 'd',
        4 => 'e',
        5 => 'f',
        6 => 'g',
        7 => 'h',
        8 => 'i',
        9 => 'j',
        10 => 'k',
        11 => 'l',
        12 => 'm',
        13 => 'n',
        14 => 'o',
        15 => 'p',
        16 => 'q',
        17 => 'r',
        18 => 's',
        19 => 't',
        20 => 'u',
        21 => 'v',
        22 => 'w',
        23 => 'x',
        24 => 'y',
        25 => 'z',
    ];

    $textEncode = '';

    for ($i = 0; $i < strlen($textMin); $i++) {
        if (is_numeric($textMin[$i])) {
            $textEncode .= $textMin[$i];
            continue;
        }

        foreach ($alfabeto as $alfa => $valor) {
            if ($valor === $textMin[$i]) {
                $novoIndice = ($num1 * $alfa + $num2) % 26;
                $textEncode .= $alfabeto[$novoIndice];
            }
        }
    }

    return implode(' ', str_split($textEncode, 5));
}


function inversoModular(int $num1, int $modulo): int
{
    for ($i = 1; $i < $modulo; $i++) {
        if (($num1 * $i) % $modulo === 1) {
            return $i;
        }
    }

    throw new InvalidArgumentException('a and m must be coprime.');
}

function decode(string $text, int $num1, int $num2): string
{
    if (mdc($num1, 26) !== 1) {
        throw new InvalidArgumentException('a and m must be coprime.');
    }

    $textMin = strtolower($text);

    $alfabeto = [
        0 => 'a',
        1 => 'b',
        2 => 'c',
        3 => 'd',
        4 => 'e',
        5 => 'f',
        6 => 'g',
        7 => 'h',
        8 => 'i',
        9 => 'j',
        10 => 'k',
        11 => 'l',
        12 => 'm',
        13 => 'n',
        14 => 'o',
        15 => 'p',
        16 => 'q',
        17 => 'r',
        18 => 's',
        19 => 't',
        20 => 'u',
        21 => 'v',
        22 => 'w',
        23 => 'x',
        24 => 'y',
        25 => 'z',
    ];

    $inverso = inversoModular($num1, 26);
    $textDecode = '';

    for ($i = 0; $i < strlen($textMin); $i++) {
        if (is_numeric($textMin[$i])) {
            $textDecode .= $textMin[$i];
            continue;
        }

        foreach ($alfabeto as $indice => $letra) {
            if ($letra === $textMin[$i]) {
                $novoIndice = ($inverso * ($indice - $num2)) % 26;

                if ($novoIndice < 0) {
                    $novoIndice += 26;
                }

                $textDecode .= $alfabeto[$novoIndice];
            }
        }
    }

    return $textDecode;
}