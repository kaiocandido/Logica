<?php

    function calcularMedia($n1, $n2, $n3){
        $result = ($n1 + $n2 + $n3) / 3;
        return $result;
    }

    function soma( $n1, $n2, $n3){
        $result = $n1 + $n2 + $n3;
        return $result;
    }

    function mostrarMaior($n1, $n2){
        if($n1 > $n2){
            echo "O maior é o " .$n1;
        }else{
            echo "O maior é o " .$n2;
        }
    }

    
    function mostrarMenor($n1, $n2){
        if($n1 < $n2){
            echo "O menor é o " .$n1;
        }else{
            echo "O menor é o " .$n2;
        }
    }

    function tabuada($n1){
        for($i = 0; $i<=$n1; $i++){
            echo $i. " X " .$n1. " = " .$i*$n1;
        }
    }




?>