<?php

function placeQueen(int $xCoordinate, int $yCoordinate): bool
{
    if($xCoordinate >= 0 && $xCoordinate < 8){
        if($yCoordinate >= 0 && $yCoordinate <8){
            return true;
        }
    }

    $erro = throw new InvalidArgumentException(InvalidArgumentException::class);

    return $erro;

}

function canAttack(array $whiteQueen, array $blackQueen): bool
{

    if($whiteQueen[0] === $blackQueen[0]){
        return true;
    }

    if($whiteQueen[1] === $blackQueen[1]){
        return true;
    }



    $somaX = abs($whiteQueen[0] - $blackQueen[0]);
    $somay=  abs($whiteQueen[1] - $blackQueen[1]);

    if($somaX === $somay){
        return true;
    }

    return false;
}
