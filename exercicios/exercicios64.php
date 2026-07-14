<?php

class Bob
{
    public function respondTo(string $str): string
    {
    
        $trimmed = trim($str);
        $hasLetter = preg_match('/[a-zA-Z]/', $str);
        $isAllCaps = $hasLetter && strtoupper($str) === $str;
        $isQuestion = str_ends_with($trimmed, '?');

        // SILÊNCIO
        if ($trimmed === '') {
            return "Fine. Be that way!";
        }

        // PERGUNTA EM GRITO
        if ($isQuestion && $isAllCaps) {
            return "Calm down, I know what I'm doing!";
        }

        // GRITO
        if ($isAllCaps) {
            return "Whoa, chill out!";
        }

        // PERGUNTA NORMAL
        if ($isQuestion) {
            return "Sure.";
        }

        // PADRÃO
        return "Whatever.";
    }
}