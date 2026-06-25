<?php

function say(int $number): string
{
    $unidades = [
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
    ];

    $dezenas = [
        20 => 'twenty',
        30 => 'thirty',
        40 => 'forty',
        50 => 'fifty',
        60 => 'sixty',
        70 => 'seventy',
        80 => 'eighty',
        90 => 'ninety',
    ];

    if($number < 0 || $number > 999_999_999_999){
        throw new InvalidArgumentException("Input out of range");
    }

    // Números de 0 até 19.
    foreach ($unidades as $valor => $nome) {
        if ($number === $valor) {
            return $nome;
        }
    }

    // Bilhões.
    if ($number >= 1_000_000_000) {
        $grupo = intdiv($number, 1_000_000_000);
        $restante = $number % 1_000_000_000;

        $resultado = say($grupo) . ' billion';

        if ($restante > 0) {
            $resultado .= ' ' . say($restante);
        }

        return $resultado;
    }

    // Milhões.
    if ($number >= 1_000_000) {
        $grupo = intdiv($number, 1_000_000);
        $restante = $number % 1_000_000;

        $resultado = say($grupo) . ' million';

        if ($restante > 0) {
            $resultado .= ' ' . say($restante);
        }

        return $resultado;
    }

    // Milhares.
    if ($number >= 1_000) {
        $grupo = intdiv($number, 1_000);
        $restante = $number % 1_000;

        $resultado = say($grupo) . ' thousand';

        if ($restante > 0) {
            $resultado .= ' ' . say($restante);
        }

        return $resultado;
    }

    // Centenas.
    if ($number >= 100) {
        $grupo = intdiv($number, 100);
        $restante = $number % 100;

        $resultado = $unidades[$grupo] . ' hundred';

        if ($restante > 0) {
            $resultado .= ' ' . say($restante);
        }

        return $resultado;
    }

    // Dezenas de 20 até 99.
    $unidade = $number % 10;
    $dezena = $number - $unidade;

    foreach ($dezenas as $valor => $nome) {
        if ($dezena === $valor) {
            if ($unidade === 0) {
                return $nome;
            }

            return $nome . '-' . $unidades[$unidade];
        }
    }

    return '';
}