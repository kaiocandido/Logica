<?php

// Method GET

$a = $_GET["txt_a"];
$b = $_GET["txt_b"];


$soma = $a + $b;

echo "A soma é: " .$soma;
echo "</br>";

// Method POST

$c = $_POST["txt_a"];
$d = $_POST["txt_b"];

$soma2 = $c + $d;
echo "A soma é: " .$soma2;