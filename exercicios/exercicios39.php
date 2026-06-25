<?php

function flatten(array $input): array
{
    $arrayFinal = [];

    for ($i = 0; $i < count($input); $i++) {
        if ($input[$i] === null) {
            continue;
        }

        if (is_array($input[$i])) {
            $arrayFinal = array_merge($arrayFinal, flatten($input[$i]));
        } else {
            $arrayFinal[] = $input[$i];
        }
    }

    return $arrayFinal;
}