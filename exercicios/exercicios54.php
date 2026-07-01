<?php

<<<<<<< HEAD
=======
class KindergartenGarden
{   
    private $diagram;

    public function __construct(string $diagram)
    {
        $this->diagram = $diagram;
    }

    public function plants(string $student):array
    {
        $children = [
        "Alice",
        "Bob",
        "Charlie",
        "David",
        "Eve",
        "Fred",
        "Ginny",
        "Harriet",
        "Ileana",
        "Joseph",
        "Kincaid",
        "Larry"
        ];


        $plants = [
        "G" => "grass",
        "C" => "clover",
        "R" => "radishes",
        "V" =>"violets",
        ];

        $arrayFinal = [];


        foreach($children as $index => $names){
            if($student == $names){
                $indiceOne = $index * 2;
                $indiceTwo = $index  * 2 + 1;
            }
        }

        $linhas = explode("\n", $this->diagram);

        $arrayFinal[] = $linhas[0][$indiceOne];
        $arrayFinal[] = $linhas[0][$indiceTwo];
        $arrayFinal[] = $linhas[1][$indiceOne];
        $arrayFinal[] = $linhas[1][$indiceTwo];

        $resultado = [];

        foreach($arrayFinal as $iniciais){
            $resultado[] = $plants[$iniciais];
        }

        return $resultado;
    }
}

$test = new KindergartenGarden("VRCGVVRVCGGCCGVRGCVCGCGV\nVRCCCGCRRGVCGCRVVCVGCGCV");

echo $test->plants("Alice");
>>>>>>> fc6cda63c4850517398b46b83f861d607c1001e6
