<?php

class FoodChain
{
    private array $animals = [
        'fly' => [
            'intro' => "I know an old lady who swallowed a fly.",
            'catch' => "",
        ],
        'spider' => [
            'intro' => "I know an old lady who swallowed a spider.",
            'catch' => "She swallowed the spider to catch the fly.",
            'extra' => "It wriggled and jiggled and tickled inside her."
        ],
        'bird' => [
            'intro' => "I know an old lady who swallowed a bird.",
            'catch' => "She swallowed the bird to catch the spider that wriggled and jiggled and tickled inside her.",
            'extra' => "How absurd to swallow a bird!"
        ],
        'cat' => [
            'intro' => "I know an old lady who swallowed a cat.",
            'catch' => "She swallowed the cat to catch the bird.",
            'extra' => "Imagine that, to swallow a cat!"
        ],
        'dog' => [
            'intro' => "I know an old lady who swallowed a dog.",
            'catch' => "She swallowed the dog to catch the cat.",
            'extra' => "What a hog, to swallow a dog!"
        ],
        'goat' => [
            'intro' => "I know an old lady who swallowed a goat.",
            'catch' => "She swallowed the goat to catch the dog.",
            'extra' => "Just opened her throat and swallowed a goat!"
        ],
        'cow' => [
            'intro' => "I know an old lady who swallowed a cow.",
            'catch' => "She swallowed the cow to catch the goat.",
            'extra' => "I don't know how she swallowed a cow!"
        ],
        'horse' => [
            'intro' => "I know an old lady who swallowed a horse.",
            'catch' => "", // não captura nada
            'extra' => "She's dead, of course!"
        ],
    ];

    public function verse(int $verseNumber): array
    {
        $keys = array_keys($this->animals);
        $animalKey = $keys[$verseNumber - 1];

        $verse = [];
        $animalData = $this->animals[$animalKey];

        $verse[] = $animalData['intro'];

        if (isset($animalData['extra'])) {
            $verse[] = $animalData['extra'];
        }

        if ($animalKey !== 'fly' && $animalKey !== 'horse') {
            for ($i = $verseNumber - 1; $i > 0; $i--) {
                $prevKey = $keys[$i];
                $prevData = $this->animals[$prevKey];

                if (isset($prevData['catch'])) {
                    $verse[] = $prevData['catch'];
                }
            }

            $verse[] = "I don't know why she swallowed the fly. Perhaps she'll die.";
        }

        return $verse;
    }

    public function verses(int $start, int $end): array
    {
        $allVerses = [];
        for ($i = $start; $i <= $end; $i++) {
            $allVerses[] = $this->verse($i);
        }
        return $allVerses;
    }

    public function song(): array
    {
        return $this->verses(1, count($this->animals));
    }
}

