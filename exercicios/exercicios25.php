<?php

function brackets_match(string $input): bool {
    $stack = [];

    $map = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        if ($char === '(' || $char === '[' || $char === '{') {
            $stack[] = $char;
        }
        elseif ($char === ')' || $char === ']' || $char === '}') {
            if (empty($stack) || array_pop($stack) !== $map[$char]) {
                return false;
            }
        }
    }

    return empty($stack);
}