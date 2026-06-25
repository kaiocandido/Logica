<?php

class MicroBlog
{
    public function truncate(string $text): string
    {
        $result = "";

        $tamanho = mb_strlen($text);

        $maxLength = 5;
        $limit = min($tamanho, $maxLength);

        for ($i = 0; $i < $limit; $i++) {
            $result .= mb_substr($text, $i, 1);
        }

        // Retorna a string truncada
        return $result;
    }
}