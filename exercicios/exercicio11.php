<?php

// Estudando IF

//$a = $_POST["txt_a"];

if ($a >= 7) {
    echo "Aluno aprovado!!";
    echo "</br>";
} else if ($a >=5 && $a <=7){
    echo "Aluno de recuperação";
    echo "</br>";
} else {
    echo "Aluno reprovado!!";
    echo "</br>";
}

// Usando switch case

switch ($a){
    case 1:
        echo "Igual a 1";
        break;
    case 2:
    case 3:
    case 4:
        echo "Entre 2 e 4";
        break;
    case 5:
    case 6:
    case 7:
        echo "Entre 5 e 7";
    default:
        echo "Numero maior que 7 ou diferente!";
}