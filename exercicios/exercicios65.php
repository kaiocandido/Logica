<?php

function duplicar(string $num): string {
    $carry = 0;
    $result = '';
    for ($i = strlen($num) - 1; $i >= 0; $i--) {
        $digit = (int)$num[$i];
        $total = $digit * 2 + $carry;
        $carry = intdiv($total, 10);
        $result = ($total % 10) . $result;
    }
    if ($carry) {
        $result = $carry . $result;
    }
    return $result;
}

function square(int $number): string
{
    if ($number <= 0 || $number > 64) {
        throw new InvalidArgumentException;
    }

    $valor = '1'; // Primeiro quadrado
    for ($i = 1; $i < $number; $i++) {
        $valor = duplicar($valor);
    }

    return $valor;
}

function total(): string
{
    $valor = '1'; // Primeiro quadrado
    $total = '1';
    for ($i = 1; $i < 64; $i++) {
        $valor = duplicar($valor);
        $total = somar($total, $valor);
    }

    return $total;
}

function somar(string $a, string $b): string {
    $a = strrev($a);
    $b = strrev($b);
    $carry = 0;
    $result = '';
    $max = max(strlen($a), strlen($b));
    for ($i = 0; $i < $max; $i++) {
        $digitA = $i < strlen($a) ? (int)$a[$i] : 0;
        $digitB = $i < strlen($b) ? (int)$b[$i] : 0;
        $sum = $digitA + $digitB + $carry;
        $result .= ($sum % 10);
        $carry = intdiv($sum, 10);
    }
    if ($carry) $result .= $carry;
    return strrev($result);
}