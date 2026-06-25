<?php

// O tipo inteiro é um tipo de dado que representa números inteiros, ou seja, números sem casas decimais. 
// Em PHP, os inteiros podem ser representados em diferentes bases numéricas, como decimal, octal e hexadecimal.

// Exemplo de declaração de variáveis do tipo inteiro
$numeroDecimal = 42; // Número inteiro em base decimal
$numeroOctal = 052; // Número inteiro em base octal (equivalente a 42 em decimal)
$numeroHexadecimal = 0x2A; // Número inteiro em base hexadecimal (equivalente a 42 em decimal)

// Exemplo de operações com inteiros
$soma = $numeroDecimal + 10; // Soma de um inteiro com outro número

echo "Número decimal: $numeroDecimal\n"; // Saída: Número decimal: 42
echo "Número octal: $numeroOctal\n"; // Saída: Número octal: 42
echo "Número hexadecimal: $numeroHexadecimal\n"; // Saída: Número hexadecimal:
echo "Soma: $soma\n"; // Saída: Soma: 52

// Para fazer um cast com inteiro usamos a função (int), (integer) ou a função intval()
$numeroString = "100";
$numeroInteiro = (int)$numeroString; // Convertendo string para inteiro usando cast
$numeroInteiro2 = intval($numeroString); // Convertendo string para inteiro usando a