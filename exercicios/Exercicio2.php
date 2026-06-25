<?php


$moedas = [1, 5, 10, 25, 100];

function findFewestCoins(array $coins, int $amount): array
{   
    $arrayNums = [];
    $result = 0;


    if ($amount < 0) {
        throw new InvalidArgumentException("Cannot make change for negative value");
    }
    
    foreach ($coins as $coin){
        while ($result + $coin <= $amount){
            $result += $coin;
            $arrayNums[] = $coin;
        }
        
    }

    sort($arrayNums);
    return $arrayNums;   
}

print_r(findFewestCoins($moedas, -15));