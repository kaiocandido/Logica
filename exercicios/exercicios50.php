<?php

class Yacht
{
    public function score(array $rolls, string $category)
    {
        $categorias = [
            'ones' => 1,
            'twos' => 2,
            'threes' => 3,
            'fours' => 4,
            'fives' => 5,
            'sixes' => 6,
            'full house' => null,
            'four of a kind' => null,
            'little straight' => 30,
            'big straight' => 30,
            'choice' => null,
            'yacht' => 50,
        ];

        $result = 0;

        foreach($categorias as $key => $pontos){
            if($category == $key){
                if($key == "ones"){
                    $arrayFinal = [];
                    foreach($rolls as $roll){
                        if($roll == $pontos){
                            $arrayFinal[] = $roll;
                        }
                    }

                    for($i=0; $i < count($arrayFinal); $i++){
                        $result += $arrayFinal[$i];
                    }
                }
                if($key == "twos"){
                    $arrayFinal = [];
                    foreach($rolls as $roll){
                        if($roll == $pontos){
                            $arrayFinal[] = $roll;
                        }
                    }

                    for($i=0; $i < count($arrayFinal); $i++){
                        $result += $arrayFinal[$i];
                    }
                }
                if($key == "threes"){
                    $arrayFinal = [];
                    foreach($rolls as $roll){
                        if($roll == $pontos){
                            $arrayFinal[] = $roll;
                        }
                    }

                    for($i=0; $i < count($arrayFinal); $i++){
                        $result += $arrayFinal[$i];
                    }
                }
                if($key == "fours"){
                    $arrayFinal = [];
                    foreach($rolls as $roll){
                        if($roll == $pontos){
                            $arrayFinal[] = $roll;
                        }
                    }

                    for($i=0; $i < count($arrayFinal); $i++){
                        $result += $arrayFinal[$i];
                    }
                }
                if($key == "fives"){
                    $arrayFinal = [];
                    foreach($rolls as $roll){
                        if($roll == $pontos){
                            $arrayFinal[] = $roll;
                        }
                    }

                    for($i=0; $i < count($arrayFinal); $i++){
                        $result += $arrayFinal[$i];
                    }
                }
                if($key == "sixes"){
                    $arrayFinal = [];
                    foreach($rolls as $roll){
                        if($roll == $pontos){
                            $arrayFinal[] = $roll;
                        }
                    }

                    for($i=0; $i < count($arrayFinal); $i++){
                        $result += $arrayFinal[$i];
                    }
                }
                if($key == "full house"){
                    $listQuantidade = [];
                    foreach ($rolls as $key) {
                        if(!isset($listQuantidade[$key])){
                            $listQuantidade[$key] = 0;
                        }

                        $listQuantidade[$key] += 1;
                        $valor = 0;
                        for($i=0; $i< count($rolls); $i++){
                            $valor += $rolls[$i];
                        }

                        foreach($listQuantidade as $qntd => $value){

                            if($value === 3){
                                $result = $valor;
                            }

                        }
                    }
                }
                if($key == "four of a kind"){
                    $listQuantidade = [];
                    foreach ($rolls as $key) {
                        if(!isset($listQuantidade[$key])){
                            $listQuantidade[$key] = 0;
                        }

                        $listQuantidade[$key] += 1;

                        foreach($listQuantidade as $qntd => $value){
                            if($value === 4){
                                $result = $qntd + $qntd + $qntd + $qntd;
                            }
                        }
                    }
                }
                if($key == "little straight"){
                    sort($rolls);
                    $comparativo = [1, 2, 3, 4, 5];
                    if($rolls === $comparativo){
                        $result = 30;
                    }
                }
                if($key == "big straight"){
                   sort($rolls);
                    $comparativo = [2,3,4,5,6];
                    if($rolls === $comparativo){
                        $result = 30;
                    }
                }
                if($key == "choice"){
                    foreach ($rolls as $key) {
                        $result += $key;
                    }
                }
                if($key == "yacht"){
                    foreach ($rolls as $key) {
                        if(!isset($listQuantidade[$key])){
                            $listQuantidade[$key] = 0;
                        }

                        $listQuantidade[$key] += 1;

                        foreach($listQuantidade as $qntd => $value){
                            if($value === 5){
                                $result = 50;
                            }
                        }
                    }
                }
                
            }
        }

        return $result;
    }
}

$dice = [2, 2, 2, 2, 2];
$category = 'full house';

$result = new Yacht();

echo $valor = $result -> score($dice, $category);
