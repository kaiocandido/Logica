<?php

function vlq_encode(array $input): array
{
    $result = [];

    foreach ($input as $number) {
        if ($number < 0 || $number > 0xFFFFFFFF) {
            throw new InvalidArgumentException("Number is invalid!");
        }

        $bytes = [];

        do {
            $bytes[] = $number & 0x7F;
            $number = $number >> 7;
        } while ($number > 0);

        $bytes = array_reverse($bytes);

        for ($i = 0; $i < count($bytes) - 1; $i++) {
            $bytes[$i] = $bytes[$i] | 0x80;
        }

        foreach ($bytes as $byte) {
            $result[] = $byte;
        }
    }

    return $result;
}

function vlq_decode(array $bytes): array
{
    $result = [];
    $number = 0;
    $incomplete = false;

    foreach ($bytes as $byte) {
        if ($byte < 0 || $byte > 0xFF) {
            throw new InvalidArgumentException("Byte is invalid!");
        }

        $number = ($number << 7) | ($byte & 0x7F);

        if ($number > 0xFFFFFFFF) {
            throw new OverflowException("Overflow!");
        }

        $incomplete = ($byte & 0x80) !== 0;

        if (!$incomplete) {
            $result[] = $number;
            $number = 0;
        }
    }

    if ($incomplete) {
        throw new InvalidArgumentException("Incomplete byte sequence!");
    }

    return $result;
}