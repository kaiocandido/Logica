<?php

include "exercicios12.php";

$a = $_POST["txt_a"];
$b = $_POST["txt_b"];
$c = $_POST["txt_c"];
$option = $_POST["option"];

if($option == "media"){
    echo "A media é " .calcularMedia($a, $b, $c);
}else if ($option == "soma") {
    echo "A soma é " . soma($a, $b, $c);
}else if ($option == "maior"){
    mostrarMaior($a, $b);
}else if($option == "menor"){
    mostrarMaior($a, $b);
}else if ($option == "tabuada"){
    tabuada($a);
}