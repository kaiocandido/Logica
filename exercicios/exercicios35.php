<?php

class Sublist
{
    public function compare(array $listOne, array $listTwo): string
    {
        $tamanhoOne = count($listOne);
        $tamanhoTwo = count($listTwo);



        if(empty($listOne) && empty($listTwo)){
            return "EQUAL";
        }

        if ($tamanhoOne == $tamanhoTwo && $listOne === $listTwo){
            return  "EQUAL";
        }

        if($tamanhoOne > $tamanhoTwo){
            for($i = 0; $i <= $tamanhoOne - $tamanhoTwo; $i++){
                $trecho = array_slice($listOne, $i, $tamanhoTwo);
                if($trecho === $listTwo){
                    return  "SUPERLIST";
                } 
            }
            return "UNEQUAL";
        }
        
        if( $tamanhoTwo > $tamanhoOne){
            for($i = 0; $i <= $tamanhoTwo - $tamanhoOne; $i++){
                $trecho = array_slice($listTwo, $i, $tamanhoOne);
                if($trecho === $listOne){
                    return "SUBLIST";
                }
            }
            return "UNEQUAL";
        }

        return "UNEQUAL";
    }
}
