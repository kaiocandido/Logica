<?php

class House
{
    private $frases = [
    "the house that Jack built.",
    "the malt\nthat lay in",
    "the rat\nthat ate",
    "the cat\nthat killed",
    "the dog\nthat worried",
    "the cow with the crumpled horn\nthat tossed",
    "the maiden all forlorn\nthat milked",
    "the man all tattered and torn\nthat kissed",
    "the priest all shaven and shorn\nthat married",
    "the rooster that crowed in the morn\nthat woke",
    "the farmer sowing his corn\nthat kept",
    "the horse and the hound and the horn\nthat belonged to",
    ];

    public function verse(int $verseNumber): array
    {
        $fraseNova = array_slice($this->frases, 0, $verseNumber);

        $fraseNova = array_reverse($fraseNova);

        $texto = "This is " . implode(" ", $fraseNova);

        $texto = explode("\n", $texto);

        return $texto;

    }

    public function verses(int $start, int $end): array
    {
        $fraseNova = [];

        for($i = $start; $i <= $end; $i++){
            foreach($this->verse($i) as $linha){
                $fraseNova[] = $linha;
            }

            if($i<$end){
                $fraseNova[] = '';
            }
        }
        
        return $fraseNova;
    }
}