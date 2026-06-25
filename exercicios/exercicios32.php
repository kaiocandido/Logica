<?php

function maskify(string $cc): string
{
    if (strlen($cc) < 6) return $cc;
    if (empty($cc)) return "";

    $digitsOnly = preg_replace('/\D/', '', $cc);

    $maskedDigits = substr($digitsOnly, 0, 1)
                  . str_repeat('#', max(strlen($digitsOnly) - 5, 0))
                  . substr($digitsOnly, -4);

    $index = 0;
    return preg_replace_callback('/\d/', function($m) use ($maskedDigits, &$index) {
        return $maskedDigits[$index++];
    }, $cc);
}