<?php

// Um boolean é um tipo de dado que pode assumir apenas dois valores: verdadeiro (true) ou falso (false). 
//Ele é comumente usado para representar condições, estados ou resultados de operações lógicas. Em muitas linguagens 
//de programação, o boolean é fundamental para controle de fluxo, tomada de decisões e avaliação de expressões lógicas.

// Para converter para boolean, podemos usar (bool) ou (boolean) antes da variável ou valor que queremos converter,
//ou simplesmente atribuir um valor que seja considerado verdadeiro ou falso.


$variavelBolean = true; // criando variavel do tipo boolean
$variavelStr = ""; // Criando variavel do tipo string
$variavelInt = 22; // Criando variavel do tipo inteiro
$variavelStrTwo = 'Completo'; // Criando variavel do tipo string

var_dump($variavelBolean); // verificando o tipo e valor da variavel
echo "<br>";
var_dump((bool) $variavelStr); // fazendo cast para boolean

