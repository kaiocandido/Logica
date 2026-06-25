<?php


function wordCount(string $words): array
{
    $fraseMinuscula = strtolower($words);

    preg_match_all("/[a-z0-9]+(?:'[a-z0-9]+)?/", $fraseMinuscula, $matches);

    $palavras = $matches[0];
    
    $result = [];

    foreach($palavras as $palavra){
        if(!isset($result[$palavra])){
            $result[$palavra] = 0; 
        }

        $result[$palavra] += 1;
    }

    return $result;
}
