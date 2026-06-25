<?php

function slices(string $digits, int $series): array
{
    $arrayfinal = [];

    for($i=0; $i<=strlen($digits) - $series; $i++){
        $arrayfinal[] = substr($digits, $i, $series);
    }

    return $arrayfinal;
}
