<?php

class IsbnVerifier
{
    public function isValid(string $isbn): bool
    {
        $digitsOnly = str_replace("-", "", $isbn);

        if(strlen($digitsOnly) != 10){
            return false;
        }

        $array = str_split($digitsOnly);  

        $ultimoDigito = array_pop($array);

        if (strtoupper($ultimoDigito) === 'X') {
            $array[] = 10;
        }
        else if (is_numeric($ultimoDigito)) {
            $array[] = (int)$ultimoDigito;
        }
        else {
            return false;
        }

        $count = 10;
        $sum = 0;

        for($j =0; $j<count($array) -1; $j++){
            if (!is_numeric($array[$j])){
                return false;
            }
        }

        for($i = 0; $i<count($array); $i++){
            $sum += ($array[$i]) * $count;
            $count--; 
        }

        if($sum % 11 == 0){
            return true;
        }

        return false;
    }
}
