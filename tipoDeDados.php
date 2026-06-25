<?php

$variavelBolean = true; // criando variavel do tipo boolean
$variavelStr = "Teste"; // Criando variavel do tipo string
$variavelInt = 22; // Criando variavel do tipo inteiro
$variavelStrTwo = 'Completo'; // Criando variavel do tipo string


// Para imprimir a variavel usamos e o seu tipo

echo "esta variavel é do tipo: " .gettype($variavelBolean) ." com o valor: " .$variavelBolean;
echo "<br>";

// para verificar o tipo da variavel usamos is_bool, is_string, is_int e etc

if (is_string($variavelStr)){
    echo "esta variavel é do tipo string";
}else{
    echo "esta variavel não é do tipo string é do tipo: " .gettype($variavelStr);
}